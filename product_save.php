<?php
$con=new mysqli("localhost","root" ,"","project_1_web_ban_sach_nhom_13");
if($con->connect_errno){
    die("connection error");
}
$productName=$_POST["productName"];
$quantity=$_POST["quantity"];
$price=$_POST["price"];
$description=$_POST["description"];
$category=$_POST["category"];
$producers=$_POST["producers"];
$image=$_POST["image"];

$sql="INSERT INTO books(name, quantity,price,description,category_id,producer_id,image) values ('$productName','$quantity','$price','$description','$category','$producers','$image')";
$con->query($sql);
header("Location: product.php");
?>
