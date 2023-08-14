<?php
$con=new mysqli("localhost","root" ,"","project_1_web_ban_sach_nhom_13");
if($con->connect_errno){
    die("connection error");
}

$id = $_GET["id"];

$sql = "DELETE FROM books WHERE id = $id";
$con->query($sql);

header("Location: product.php");
?>
