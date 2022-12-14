<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['phone'];
$address=$_POST['address'];
$username=$_POST['username'];
$password=$_POST['password'];


include '../connection.php';
$query = "insert into login(username,password,usertype,status) values('$username','$password','Pharmacy','1')";
mysqli_query($con, $query) or die(mysqli_error($con));
$logid=mysqli_insert_id($con);

  $sql = "insert into add_pharmacy(name,address,phonenumber,email,loginid) values('$name','$address','$number','$email','$logid')";
mysqli_query($con, $sql);
echo"<script>alert('Added Sucessfully');window.location='add_pharmacy.php';</script>";


?>