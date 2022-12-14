<?php
session_start();
unset($_SESSION["loginid"]);
unset($_SESSION["username"]);
header("location:../index.html");
?>