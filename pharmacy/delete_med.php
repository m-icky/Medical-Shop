<?php
include('../connection.php');
$proid=$_GET['id'];
$sql="DELETE FROM `add_med` WHERE id='$proid'";
if(mysqli_query($con,$sql))
        {

            header("location:remove_med.php");
        }
        else{
            echo "error".$sql."<br>".mysqli_error($con);
        }
?>