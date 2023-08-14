<?php

$con = new mysqli("localhost", "root", "", "project_1_web_ban_sach_nhom_13");
if ($con->connect_errno) {
    die("connection error");
}

$id = $_GET["id"];
$status = $_GET["status"];

$sql = "";
$sql .= " UPDATE ordering ";
$sql .= " SET ";
$sql .= "   status    = '$status' ";
$sql .= " WHERE ";
$sql .= "   id              = $id ";

$con->query($sql);

header("Location: orders_list.php");
