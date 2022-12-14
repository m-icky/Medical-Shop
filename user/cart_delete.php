<?php
include '../connection.php';
$id = $_GET['id'];
$del = "DELETE FROM cart WHERE cart_id= '$id' " ;
mysqli_query($con,$del);
$dele = "DELETE FROM booking_view WHERE cart_id= '$id' " ;
mysqli_query($con,$dele);

echo "<script> alert('Item Removed');window.location.href='../user/user_index.php';</script>";

?>