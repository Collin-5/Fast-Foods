<?php
include 'protect.php';

require 'connect.php';

if (isset($_REQUEST["customer_id"]))
{
$customer_id = $_REQUEST["customer_id"];
$user_id = $_SESSION["id"];
$product_ids = $_SESSION["products"];
$date_sold = date("Y-m-d");
$price = 1500;

foreach($product_ids as $pid){

$query = "INSERT INTO `sales`(`id`, `user_id`, `product_id`, `customer_id`, `date_sold`, `price`) VALUES (null,$user_id,$pid,$customer_id,'$date_sold',$price)";
mysqli_query($con, $query) or die(mysqli_errno($con));
}
$_SESSION["products"] = [];

}
if (isset($_GET["id"])){
$_SESSION["products"] = array_diff($_SESSION["products"], [$_GET["id"]]);
}
if (count($_SESSION["products"]) == 0){
header("location:sales.php");
}

$ids = array_unique($_SESSION["products"]);

//print_r($ids);
//die();
$data = implode(",", $ids);
//echo $data;
//die();
//$con = mysqli_connect("localhost","root","root","complete") or die(mysqli_connect_error());
$sql = "SELECT * FROM products WHERE id IN($data)";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));// executing the query
$rows = mysqli_fetch_all($result, 1);//assoc array

//fetch members
$sql2 = "SELECT * FROM customers";
$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));// executing the query
$customers = mysqli_fetch_all($result2, 1);//assoc array




mysqli_close($con);//close the connection

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
<?php include 'nav.php' ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">

            <form action="checkout.php" method="post" class="form-inline mr-2">
                <div class="form-group">
                    <select name="customer_id" class="form-control">
                        <?php foreach ($customers as $person): ?>
                            <option value="<?=$person["id"]?>"> <?=$person["names"]?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button class="btn btn-info btn-sm ml-2"><i class="fas fa-paper-plane"></i>Place Your Order</button>
            </form>


            <table id="example" class="table table-striped table-bordered">


                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Poster</th>
                    <th>PRICE</th>
                    <th>REMOVE</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($rows as $product): ?>
                    <tr>
                        <td> <?= $product["title"] ?> </td>
                        <td> <?= $product["description"] ?> </td>
                        <td><img src="<?= $product['poster'] ?>" width="60" height="60" alt=""></td>
                        <td> <?= $product["price"] ?> </td>

                        <td><a class="btn btn-danger btn-sm" href="checkout.php?id=<?= $product["id"] ?>"><i class="fas fa-trash"></i>Remove</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

</body>
</html>

