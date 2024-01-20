<?php

@include 'login_1/config.php';

session_start();
require 'functions.php';

if (!is_logged_in()) {
    redirect('login_1/login_form.php');
}

$id = $_SESSION["user_id"];

$row = db_query("select * from user_form where id = :id limit 1", ['id' => $id]);

if ($row) {
    $row = $row[0];
}
// if(isset($_POST['update_update_btn'])){
//     $update_value = $_POST['update_quantity'];
//     $update_id = $_POST['update_quantity_id'];
//     $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
//     // if($update_quantity_query){
//     //    header('location:cart.php');
//     // };
//  };

if (!isset($_SESSION['user_name'])) {
    header('location:login_1/login_form.php');
}
$id = $_SESSION['user_id'];
$select = " SELECT * FROM user_form WHERE id = '$id' ";

$user_info = mysqli_query($conn, $select);

if (mysqli_num_rows($user_info) > 0) {

    $user = mysqli_fetch_array($user_info);
}
$select = " SELECT * FROM bag WHERE user_id = '$id' ";
$bag_info = mysqli_query($conn, $select);
if (mysqli_num_rows($bag_info) > 0) {

    $bag = mysqli_fetch_assoc($bag_info);
    $bag_count = mysqli_num_rows($bag_info);
} else
    $bag_count = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Karl - Fashion Ecommerce Template | Home</title>
    <link rel="stylesheet" href="search.css" >
    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style2.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    

</head>

<body>
    <div class="catagories-side-menu">
        <!-- Close Icon -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--  Side Nav  -->
        <div class="nav-side-menu">
            <div class="menu-list">
                <h6>Account</h6>
                <li><a href="profile.php"><span class="glyphicon glyphicon-user">Profile</span></a></li>
                <li><a href="login_1/logout.php"><span class="glyphicon glyphicon-user">Logout</span></a></li>
            </div>
        </div>
    </div>

    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                 
                <div class="container h-100">
                      
                    <div class="row h-100 align-items-center justify-content-end">
                        

                        <div class="col-12 col-lg-7">
                           
                            <div class="top_single_area d-flex align-items-center">
                                   <!--Search Area -->
    
                                <!-- Logo Area -->
                                
                            <!--search-->
                            
                           
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
<div class="top_logo">
                                    <a href="index.html"><img src="upload/logo2.jpg" alt=""></a>
                                </div>
</div>
                            </div>
                        </div>
                                        <!--Search Area -->
                          <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="cart">
                                        <!-- number of bag items and total cost -->

                                        <a href="#" id="header-cart-btn" target="_blank"><span class="cart_quantity"><?php echo $bag_count; ?></span> <i class="ti-bag"></i> Your Bag <!--$20--></a>
                                        <!-- bag items -->
                                        
                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">
                                            <?php
                                           
                                                $select = " SELECT * FROM bag WHERE user_id = '$id' ";
                                                $bag_info = mysqli_query($conn, $select);
                                                if(mysqli_num_rows($bag_info) > 0){
                                                    while($bag = mysqli_fetch_assoc($bag_info)){
                                                    
                                                    
                                                    
                                                

                                            ?>
                                    
                                            <li>
                                                <?php 
                                                    $id = $bag["pro_id"];
                                                    $select = " SELECT * FROM pro WHERE id = '$id' ";


                                                    $pro_info = mysqli_query($conn, $select);
                                                    
                                                    if(mysqli_num_rows($pro_info) > 0){
                                                 
                                                     $pro = mysqli_fetch_array($pro_info);}
                                                     ?>
                                                <a href="#" class="image"><img src= '<?php echo $pro["image"]; ?>' class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#"><?php echo $pro["name"]; ?></a></h6>
                                                    <p><?php echo $bag["count"] ?>x - <span class="price">$<?php echo $bag["count"] * $pro["price"]; ?></span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <?php 
                                            };};
                                            ?>
                                            <!-- <li>
                                                <a href="#" class="image"><img src="img/product-img/product-11.jpg" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$10</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <li class="total">
                                                <span class="pull-right">Total: $20.00</span>
                                                <a href="cart.html" class="btn btn-sm btn-cart">Cart</a>
                                                <a href="checkout.html" class="btn btn-sm btn-checkout">Checkout</a>
                                            </li> -->
                                        </ul>
                                    
                                    </div>
                                    <div class="header-right-side-menu ml-15">
                                        <a href="#" id="sideMenuBtn"><i class="ti-menu" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                    </div>
                </div>


            </div>

            <!-- Top Header Area End -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!-- Header Social Area -->
                            <div class="header-social-area">
                                <a href="https://www.pinterest.com/"><span class="karl-level">Share</span> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="https://www.facebook.com/login/%22%3E"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/i/flow/login%22%3E"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/signup%22%3E"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    <a class="dropdown-item" href="user_main_page.php">Home</a>
                                                    <a class="dropdown-item" href="shop.html">Shop</a>
                                                    <a class="dropdown-item" href="product-details.html">Product Details</a>
                                                    <a class="dropdown-item" href="cart.html">Cart</a>
                                                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#">Feedbacks</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><span class="karl-level">hot</span> Profile</a></li>
                                            <li class="nav-item"><a class="nav-link" href="cart.php">Bag</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Help Line -->
                            <div class="help-line">
                                <a href="tel:+346573556778"><i class="ti-headphone-alt"></i> Help</a>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** Header Area End ****** -->

        <!-- ****** Top Discount Area Start ****** -->
        <section>
                <?php if (!empty($row)) : ?>
                    <div class="row col-lg-8 border rounded mx-auto mt-5 p-2 shadow-lg">
                        <div class="col-md-4 text-center">
                            <img src="<?= get_image($row['image']) ?>" class="img-fluid rounded" style="width: 180px;height:180px;object-fit: cover;">
                            <div>

                                <?php if (user('id') == $row['id']) : ?>

                                    <a href="profile-edit.php">
                                        <button class="mx-auto m-1 btn-sm btn btn-primary">Edit</button>
                                    </a>
                                    <a href="profile-delete.php">
                                        <button class="mx-auto m-1 btn-sm btn btn-warning text-white">Delete</button>
                                    </a>
                                    <a href="logout.php">
                                        <button class="mx-auto m-1 btn-sm btn btn-info text-white">Logout</button>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="h2">User Profile</div>
                            <table class="table table-striped">
                                <tr>
                                    <th colspan="2">User Details:</th>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-envelope"></i> Email</th>
                                    <td><?= esc($row['email']) ?></td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-person-square"></i>Name</th>
                                    <td><?= esc($row['name']) ?></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="text-center alert alert-danger">That profile was not found</div>
                    <a href="index.php">
                        <button class="btn btn-primary m-4">Home</button>
                    </a>
                <?php endif; ?>
            </section>
        <!-- ****** Popular Brands Area End ****** -->

        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Our Policies</a></li>
                                <li><a href="#">Afiliates</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-lg-5">
                        <div class="single_footer_area">
                            <div class="footer_heading mb-30">
                                <h6>Subscribe to our newsletter</h6>
                            </div>
                            <div class="subscribtion_form">
                                <form action="#" method="post">
                                    <input type="email" name="mail" class="mail" placeholder="Your email here">
                                    <button type="submit" class="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>