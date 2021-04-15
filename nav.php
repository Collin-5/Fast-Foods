<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>navbar</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
<body>
<div class="">
<nav class="navbar navbar-expand-md  navbar-dark">
    <!-- Brand -->
    <a class="logo navbar-brand" href="#">collins fast foods</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto mr-20">

            <li class="nav-item">
                <a class="nav-link" href="sales.php"><i class="fas fa-paper-plane"></i>Order here</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="register-customer.php">Register Customer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add-product.php">Add products</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="register-user.php">register user</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="sale-reports.php">Reports</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="logout.php">Logout</a>

                </div>
            </li>

        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-xs-4 col-md-4"><img class="img-responsive" src="images/pizza.jpg" alt="">
              <h2>Pizza</h2>
            </div>



            <div class="col-sm-4 col-xs-4 col-md-4"><img class="img-responsive" src="images/burger.jpg" alt="">
                <h2>burger</h2>
            </div>



            <div class="col-sm-4 col-xs-4 col-md-4"><img class="img-responsive" src="images/hot.jpg" alt="">
                <h2>HotDog</h2>
            </div>

       </div>

    </div>

</div>
</div>


</body>
</html>