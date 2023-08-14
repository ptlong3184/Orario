<?php
session_start();
ob_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Giỏ Hàng</title>
    <style>
        html,body{
            margin: 0;
            /*background-color: #B2AFAE;*/
        }
    </style>
</head>
<body>
<h3 style="text-align: center"> Giỏ Hàng Cá Nhân </h3>
<div class="container mt-3">
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <td>Tên Sách</td>
            <td>Số Luong</td>
            <td> Giá Tiền </td>
            <td>Ảnh</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        <?php
        $cart=$_SESSION["cart"];
        if($cart != null){
            foreach ($cart as $k => $v) {
                if($v != null) {
                    echo "<tr>";
                    echo "<td>" . $v["name"] . "</td>";
                    echo "<td>";
                    echo"<div>Số Lượng:<input type='number' class='input form-control '></div>";
                    echo "</td>";
                    echo "<td>" . $v["price"] . "</td>";
                    echo "<td>";
                    echo"<img src='assets/".$v['image']."' style = 'width: 100px'>";
                    echo"</td>";
                    echo "<td><a href='delete_cart.php?id=".$v['id']."'>DELETE</a></td>";
                    echo "</tr>";
                }
            }
        }

        ?>
        </tbody>
    </table>
    <a href="index.php"> Về Trang Chủ </a>
</div>
<form action="orders_save.php">
    ids:
    <input type="text" class="input form-control" name="ids" id="ids" value="">
    <div>
        Họ Tên: <input type="text" class="input form-control" required name="fullName" >
    </div>
    <div>
        SĐT: <input type="text" class="input form-control" required name="phone" >
    </div>
    <div>
        Địa Chỉ: <input type="text" class="input form-control" required name="address" >
    </div>
    <div>
        <p>Ship COD</p>
    </div>
    <?php
        if ($cart!=null){
            foreach ($cart as $k => $v){
                echo '<input type="text" name="id" value="'.$v["id"].'">';
            }
        }
    ?>
    <br>
    <div>
        <button type="submit" id="order" class="btn bg-info btn-sm">Đặt Hàng</button>
    </div>
</form>
<script>
    $(function () {
        $("#order").click(function () {
            var ids = new Array();
            $("input[name=id]").each(function() {
                ids.push($(this).val());
            });
            $("#ids").val(ids);
        });
    });
</script>
</body>
</html>
<?php
    ob_end_flush();
?>

