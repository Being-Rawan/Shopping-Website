<?php
@include 'login_1/config.php';
session_start();
if(!$_SESSION["user_id"]){
    header("location:login_1/login_form.php");
}

$user_id = $_SESSION["user_id"];
$id = $_GET['product_id'];

$select = " SELECT * FROM bag WHERE user_id = '$user_id' and pro_id = '$id' ";

$bag_info = mysqli_query($conn, $select);
if(mysqli_num_rows($bag_info) == 0){
    $qure = "INSERT INTO `bag` (`user_id`, `pro_id`, `count`) VALUES('$user_id', '$id', 1);";
    mysqli_query($conn, $qure);
}
header("location:user_main_page.php");
?>
