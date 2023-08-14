<?php
session_start();
?>

<h2> Xoá Khỏi Giỏ Hàng </h2>

<?php
$id = $_GET['id'];
unset($_SESSION["cart"][$id]);
header("Location: product_cart.php")
?>
