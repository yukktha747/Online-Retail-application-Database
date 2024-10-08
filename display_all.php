<?php
include('connects/connect.php');
include('functions/commom_functions.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Retail application database</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
      .back{
      background-image: url(image1.avif);
    background-repeat: repeat;
    width:100%;
    animation:img_anim 50s linear infinite;
    }
    @keyframes img_anim{
    0%{
      background-position:0 0;

    }
    100%{
      background-position:-2122px 0;
    }
  }
  .a,.b{
    color:white;
    font-weight: bold;
  }
    </style>
</head>
<body class="back">
<nav class="navbar navbar-expand-lg bg-info">
    
  <div class="container-fluid p-0">
    <img src=".\images\logo.png" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="retail.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="retail.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/users_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart_details.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i><sup><?php cart_item();?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price:<?php total_cart_price();?>/-</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul classbar="navbar-nav me-auto" style="list-style-type:none;">
    <?php
    if(!isset($_SESSION['username'])){
      echo " <li class='nav-item'>
      <a class='nav-link' href='#'>Welcome Guest</a>
      </li>";
    }
    else{
      echo " <li class='nav-item'>
      <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a></li>";
    }

    if(!isset($_SESSION['username'])){
      echo " <li class='nav-item'>
      <a class='nav-link' href='./users_area/users_login.php'>Login</a>
      </li>";
    }
    else{
      echo " <li class='nav-item'>
      <a class='nav-link' href='./users_area/users_logout.php'>Logout</a>
      </li>";
    }
   ?>
</ul>
</nav>
<div class="back">
    <h3 class="a">Trends store</h3>
    <p class="b">Communication is the heart of retail and community</p>
</div> 
<div class="row px-1">
    <div class="col-md-10">
        <div class="row">
            <?php
            // Assuming these functions are defined in your included files
            getproduct();
            get_unique_categories();
            get_unique_brands();
            $ip = getIPAddress();  
            echo 'User Real IP Address - '.$ip;  
            cart();
            ?>
        </div>
    </div>
    <div class="col-md-2 bg-secondary p-0">
        <ul style="list-style-type:none;" class="navbar-nav me-auto text-center">
            <li class="nav-item">
                <a class="nav-link text-light" href="#"><h5>Delivery brands</h5></a>
            </li>
            <?php
            getbrands();
            ?>
            <li class="nav-item">
                <a class="nav-link text-light" href="#"><h5>Categories</h5></a>
            </li>
            <?php
            getcategories();
            ?>
        </ul>
    </div>
</div>


<div class="bg-info text-center my-1">
  <p>All rights are reserved</p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>>
</html>
</body>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>