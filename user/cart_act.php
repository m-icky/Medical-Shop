<?php
include '../connection.php';
session_start();
$id = $_GET['id'];
$login_id = $_SESSION['loginid'];
$sql = "INSERT INTO cart (user_id, product_id, cart_status, payment) VALUES ('$login_id', '$id', 'Added To Cart', 'Not Done')";
mysqli_query($con, $sql);

$query = "INSERT INTO booking_view (user_id, product_id, cart_status, payment) VALUES ('$login_id', '$id', 'Added To Cart', 'Not Done')";
mysqli_query($con, $query);

echo "<script>alert('Add To Cart');window.location.href='cart.php'</script>";
?>