<?php
$name=$_POST['name'];
$number=$_POST['number'];
$date=$_POST['date'];
$cvv=$_POST['cvv'];


include '../connection.php';
$id = $_GET['id'];

$sql = "UPDATE booking_view SET payment='Payed' WHERE user_id='$id'";
mysqli_query($con,$sql);

$sql = "insert into payment(name,number,date,cvv,loginid) values('$name','$number','$date','$cvv','$id')";
mysqli_query($con, $sql);

$sql="DELETE FROM `cart` WHERE user_id='$id'";
mysqli_query($con, $sql);

 echo"<script>alert('Payment Sucessfull');window.location='../user/user_index.php';</script>";


?>