<?php
    $ids=$_GET["ids"];
    $fullName=$_GET["fullName"];
    $phone = $_GET["phone"];
    $address=$_GET["address"];

    date_default_timezone_set("Asia/Bangkok");
    $dateBuy=date("Y-m-d H:i:s");
    $con= new mysqli("localhost","root","","project_1_web_ban_sach_nhom_13");
    $sql = "INSERT INTO ordering(cust_name,phone,address,date_buy,status) values ('$fullName','$phone','$address','$dateBuy','PENDING')";
    $con->query($sql);
    $insertedId= $con ->insert_id;
    var_export($insertedId);

    $arrId =explode(",", $ids);

    $sqlOrderDetail ="";
    $sqlOrderDetail .=" INSERT INTO order_details(book_id,quantity,order_id) ";
    $sqlOrderDetail .=" VALUES ";
    for ($i = 0; $i < count($arrId); $i++){
        if ($i != count($arrId)-1){
            $sqlOrderDetail .=" (".$arrId[$i].", 1, $insertedId), ";
        }else{
            $sqlOrderDetail .=" (".$arrId[$i].", 1, $insertedId) ";
        }
    }
    var_export($sqlOrderDetail);
    $con->query($sqlOrderDetail);
?>

