<?php
$name=$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];
$img=$_POST['img'];

include '../connection.php';

  $sql = "insert into add_med(name,price,description,img) values('$name','$price','$description','$img')";
mysqli_query($con, $sql);
echo"<script>alert('Added Sucessfully');window.location='add_med.php';</script>";


?>