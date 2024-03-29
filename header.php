<?php 
	include 'config/connect.php';
	include 'function.php';
	ob_start();
	session_start();
	
	$user = isset($_SESSION['login']) ? $_SESSION['login'] : [];
	$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

	//check navbar active
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Quầy thuốc Dũng Nhàn</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/product-detail.css">
    <link rel="stylesheet" type="text/css" href="assets/user-profile.css">
    <link rel="stylesheet" type="text/css" href="assets/index-user.css">
    <link rel="stylesheet" type="text/css" href="assets/profile.css">
    <link rel="stylesheet" type="text/css" href="assets/orders.css">                
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>

<body class="mt-0" style="background-color: white">
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: black">
        <a class="navbar-brand" href="https://www.facebook.com/groups/3938025829625561">
            <img src="uploads/logo-dn.jpg" alt="" style="width: 50px; height:50px">
            <span>
              Quầy thuốc Dũng Nhàn
            </span>
          </a>
        <a class="navbar-brand" href="orders.php">
            <i class="fas fa-shopping-bag"></i>
        </a>
         
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent"  >
            <ul class="navbar-nav mr-auto" style="text-align: center;color: white">
                <li class="nav-item active" style="color: white">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
               
                    <a class="nav-link" href="product.php">Các loại thuốc</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php  echo !empty($user) ? $user['name'] : 'Account' ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php if (!empty($user)): ?>
                        <a class="dropdown-item" href="logout.php">LOG OUT</a>
                        <a class="dropdown-item" href="profile.php">VIEW PROFILE</a>
                        <a class="dropdown-item" href="orders.php">VIEW MY ORDER</a>
                        <?php else: ?>
                        <a class="dropdown-item" href="login.php">LOG IN</a>
                        <a class="dropdown-item" href="register.php">RESGISTER</a>
                        <?php endif ?>


                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="show-cart.php">Giỏ hàng (<?php echo totalQty($cart) ?>)</a>
                </li>
                <li class="nav-item">
                <header class="header_section">
                    <div class="container">
                         <div class="top_contact-container">
                         <div class="tel_container" style="color: white; margin-top: 8px" >
                        
                         <img src="uploads/telephone-symbol-button.png" alt=""> Call : 0985399021
                       
                        </div>
          
                   </div>
               </div>
       
                  </header>
                </li>    
            </ul>
            <nav class="navbar navbar-light " style="background-color: black">
                <form class="form-inline" method="GET" action="product.php">
                 
                    <input class="form-control mr-sm-2" type="search" placeholder="Tìm tên thuốc" name="keyword"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 text-white" type="submit">Search</button>
                </form>
            </nav>
        </div>
    </nav>
</body>