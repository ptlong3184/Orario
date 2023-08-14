<?php
session_start();
?>

<?php
    $id = $_GET["id"];
    $con=new mysqli("localhost","root","","project_1_web_ban_sach_nhom_13");
    if ($con->connect_error){
        die("loi ket noi");
    }

    $sql="SELECT * from books where id=$id";

    $obj=null;
    $result= $con->query($sql);
    if ($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
            $obj=$row;
        }
    }

    $cart["id"]= $obj['id'];
    $cart["name"]= $obj['name'];
    $cart["quantity"]= $obj['quantity'];
    $cart["price"]= $obj['price'];
    $cart["image"]= $obj['image'];
    $_SESSION["cart"][$id]=$cart;
    header("Location: product_cart.php");
    ?>

