<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];


include '../connection.php';

  $sql = "insert into add_feedback(first_name,last_name,feedback,email) values('$fname','$lname','$feedback','$email')";
mysqli_query($con, $sql);
echo"<script>alert('Added Sucessfully');window.location='user_index.php';</script>";


?>