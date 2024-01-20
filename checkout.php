<?php
session_start();
@include 'login_1/config.php';




if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $postal_code = mysqli_real_escape_string($conn, $_POST['postal_code']);
    $card_name = mysqli_real_escape_string($conn, $_POST['card_name']);
    $card_number = mysqli_real_escape_string($conn, $_POST['card_number']);
    $expiry = mysqli_real_escape_string($conn, $_POST['expiry']);
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);
    $user_id = mysqli_real_escape_string($conn, $_SESSION['user_id']);

    $select = " SELECT * FROM checkout where email = '$email' && card_number = '$card_number'"  ;
        
    $price = $_SESSION['total'];

    $query = "DELETE from bag where user_id= '$user_id';";

    mysqli_query($conn, $query);
    
    // INSERT INTO `checkout` (`id`, `name`, `email`, `address`, `city`, `state`, `postal_code`, `card_name`, `card_number`, `expiry`, `cvv`, `price`)
          $insert = "INSERT INTO checkout(name, email, address, city, state, postal_code, card_name, card_number, expiry, cvv, price, user_id) VALUES('$name', '$email', '$address', '$city', '$state', '$postal_code', '$card_name', '$card_number', '$expiry', '$cvv', '$price', '$user_id');";
          mysqli_query($conn, $insert);
          header('location:checkout.php');

 
 };
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Karl - Fashion Ecommerce| Checkout</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="purchase/css/core-style.css">
    <link rel="stylesheet" href="purchase/style.css">
    <link rel="stylesheet" href="purchase/css/style2.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body inmaintabuse="1" class="vsc-initialized">

<header class="header">

<div class="flex">

<a href="#" class="logo">Checkout</a>
<a class="logo2"> <img src="img/core-img/logo2.jpg"> </a>


</div>


</header>
        
    <section>
   
    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        
        <div class="items">
            <div class="item"><a href="user_main_page.php">Home</a></div>
            <div class="item"><a href="profile.php">Profile</a></div>
            <div class="item"><a href="cart.php">Bag</a></div>
        </div>

        <!-- ****** Header Area End ****** -->

        

        <!-- ****** Checkout Area Start ****** -->
        <div class="checkout_area section_padding_100">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-page-heading">
                                <h2>Billing Address</h2>
                            </div>

                            <form action="" method="post">

                                <div class="row">
                        
                                    <div class="col">
                        
                                        <div class="inputBox">
                                            <span>full name :</span>
                                            <input type="text" name="name" required placeholder="">
                                        </div>
                                        <div class="inputBox">
                                            <span>email :</span>
                                            <input type="email" name="email" required placeholder="">
                                        </div>
                                        <div class="inputBox">
                                            <span>address :</span>
                                            <input type="text"name="address" required placeholder="">
                                        </div>
                                        <div class="inputBox">
                                            <span>city :</span>
                                            <input type="text" name="city" required placeholder="">
                                        </div>
                        
                                        <div class="flex">
                                            <div class="inputBox">
                                                <span>state :</span>
                                                <input type="text" name="state" required placeholder="">
                                            </div>
                                            <div class="inputBox">
                                                <span>Postal code :</span>
                                                <input type="text" name="postal_code" required placeholder="">
                                            </div>
                                        </div>
                        
                                    </div>
                        
                                    <div class="col">
                        
                                        <h3 class="title">payment</h3>
                        
                                        <div class="inputBox">
                                            <span>cards accepted :</span>
                                            <img src="img/core-img/card_img.png" alt="">
                                        </div>
                                        <div class="inputBox">
                                            <span>name on card :</span>
                                            <input type="text" name="card_name"required placeholder="">
                                        </div>
                                        <div class="inputBox">
                                            <span>credit card number :</span>
                                            <input type="text" name="card_number" required placeholder="">
                                        </div>
                                        <div class="inputBox">
                                            <span>expiry :</span>
                                            <input type="text" name="expiry" required placeholder="">
                                        </div>
                        
                                        <div class="flex">
                                            
                                            <div class="inputBox">
                                                <span>CVV :</span>
                                                <input type="text" name="cvv" required placeholder="">
                                            </div>
                                        </div>
                        
                                    </div>
                            
                                </div>
                        
                                <input type="submit" value="proceed to checkout" name="submit" class="submit-btn">
                        
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                        <div class="order-details-confirmation">

                            <div class="cart-page-heading">
                                <h4>Your Order</h4>
                                <p>The Details</p>
                            </div>

                            <ul class="order-details-form mb-4">
                             
                                <li><span>Shipping</span> <span>Free</span></li>
                                <li><span>Total</span> <span>$<?php echo $_SESSION['total'] ?></span></li>
                            </ul>


                            

                            <a href="#" class="karl-checkout-btn">Place Order</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->

        <!-- ****** Footer Area Start ****** -->
        
        <!-- ****** Footer Area End ****** -->
    </div>
    </section>
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
    <script src="js/active.js"></script><a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;"><i class="ti-angle-up" aria-hidden="true"></i></a><a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="ti-angle-up" aria-hidden="true"></i></a><a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="ti-angle-up" aria-hidden="true"></i></a>



<script src="chrome-extension://lopnbnfpjmgpbppclhclehhgafnifija/aiscripts/t.js"></script><script src="chrome-extension://lopnbnfpjmgpbppclhclehhgafnifija/sm.bundle.js" data-pname="ag-translate-mv3" data-asset-path="https://atm3.s3.ap-northeast-2.amazonaws.com"></script>
        
    
        
    
        
    
<script src="chrome-extension://lopnbnfpjmgpbppclhclehhgafnifija/aiscripts/t.js"></script><script src="chrome-extension://lopnbnfpjmgpbppclhclehhgafnifija/sm.bundle.js" data-pname="ag-translate-mv3" data-asset-path="https://atm3.s3.ap-northeast-2.amazonaws.com"></script><script src="chrome-extension://lopnbnfpjmgpbppclhclehhgafnifija/aiscripts/t.js"></script><script src="chrome-extension://lopnbnfpjmgpbppclhclehhgafnifija/sm.bundle.js" data-pname="ag-translate-mv3" data-asset-path="https://atm3.s3.ap-northeast-2.amazonaws.com"></script></body></html>