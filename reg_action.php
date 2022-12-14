<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$number=$_POST['phone'];
$address=$_POST['address'];
$username=$_POST['uname'];
$password=$_POST['password'];


include 'connection.php';
$query = "insert into login(username,password,usertype,status) values('$username','$password','user','1')";
mysqli_query($con, $query) or die(mysqli_error($con));
$logid=mysqli_insert_id($con);

  $sql = "insert into user_registration(first_name,last_name,address,phonenumber,email,loginid) values('$fname','$lname','$address','$number','$email','$logid')";
mysqli_query($con, $sql);
echo"<script>alert('Registration Sucessfull');window.location='login.php';</script>";


?>