<?php
$con = new mysqli("localhost", "root", "", "project_1_web_ban_sach_nhom_13");

$id = trim($_GET["id"]);

$sql = "SELECT books.id, books.name, books.quantity, books.price, books.description, books.image, producers.producer_name 
FROM books JOIN producers
ON books.producer_id = producers.id
WHERE books.id = $id";

$result = $con->query($sql);

$obj = null;

if ($result->num_rows > 0) {
    while ($row= $result->fetch_assoc()) {
        $obj = $row;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        html, body{
            margin: 0;
            background-color: rgb(240, 240, 240);
        }

    </style>
    <title>Trang Mua Hàng </title>
    <link rel="stylesheet" href="style_TBATE.css">
</head>
<body>
<div id="wrapper">
    <div id="header">
        <a href="http://localhost:8080/1405/project_1_web_ban_sach_nhom_13/index.php" class="logo">
            <img src="assets/rsz_2340091474_119745644417144_5346238063151575853_n.png" alt="">
<!--            <img src="assets/rsz_345665175_1860295224356052_7082850116933841207_n.jpg" alt="">-->
        </a>
        <div id="menu">
            <div class="item">
                <a href="http://localhost:8080/1405/project_1_web_ban_sach_nhom_13/"> Trang Chủ </a>
            </div>
            <div class="item">
                <a href=""> Sản phẩm </a>
            </div>
            <div class="item">
                <a href=""> Blog </a>
            </div>
            <div class="item">
                <a href=""> Liên Hệ </a>
            </div>
        </div>
    </div>
    <div id="banner">
        <div class="box-left">
            <?php
            if ($obj) {
                echo '<img src="assets/' . $obj["image"] . '" alt="">';
            }
            ?>
        </div>
        <div class="box-right">
            <?php echo'<h3>'.$obj["name"].'</h3>' ?>
            <div class="rating">
                <div class="item">
                    <p>
                        <span>5.0</span>
                        <span>
                        <img src="assets/star.png" alt="">
                    </span>
                        <span>
                        <img src="assets/star.png" alt="">
                    </span>
                        <span>
                        <img src="assets/star.png" alt="">
                    </span>
                        <span>
                        <img src="assets/star.png" alt="">
                    </span>
                        <span>
                        <img src="assets/star.png" alt="">
                    </span>
                    </p>
                </div>
                <div class="item">
                    <p>100,0k đánh giá</p>
                </div>
                <div class="item">
                    <p>120k đã bán</p>
                </div>
                <button class="item"> Report </button>
            </div>
            <div id="price">
                <div class="money">
                    <h3>Giá Tiền</h3>
                    <?php echo'<h4>'.$obj["price"].'<sup>đ</sup></h4>' ?>
                </div>
            </div>
            <?php
                echo "<div class='buy-button'>";
                    echo "<div class='buy-add'>";
                        echo "<button type='button' class='add_to_cart' style='margin-right: 40px'><a href='add_product.php?id=".$obj['id']."'> Thêm Vào Giỏ Hàng </a></button>";
                        echo "<button type='button' class='add_to_cart' style='margin-left: 20px'>Mua  Ngay</button>";
                    echo "</div>";
                echo "</div>";
            ?>
        </div>
    </div>
    <div id="product-info">
        <div class="product_info_details">
            <div class="product_details">
                <div class="details"> Chi Tiết Sản Phẩm </div>
            </div>
            <div class="details_a">
                <div class="dts1">
                    <label class="qwer"> Nhà Xuất Bản: </label>
                    <?php echo'<p>'. $obj["producer_name"] .'</p>'; ?>
                </div>
                <div class="dts1">
                    <label class="qwer"> Tác Giả: </label>
                    <?php echo '<p>'. $obj["writer"] .'</p>'; ?>
                </div>


                <div class="dts1">
                    <label class="qwer"> Kho Hàng: </label>
                    <?php echo '<p>'.$obj["quantity"].'</p>' ?>;
                </div>
                <div class="dts1">
                    <label class="qwer"> Gửi Từ: </label>
                    <p> Hà Nội </p>
                </div>
            </div>
        </div>
        <div class="product_info_details">
            <div class="product_details">
                <div class="details"> Mô Tả Sản Phẩm </div>
            </div>
            <div class="details_a">
                <div class="dts1">
                    <label class="qwer"> Tên: </label>
                    <?php echo '<p>'.$obj["name"].'</p>';?>
                </div>
                <div class="dts1">
                    <label class="qwer"> Quà Tặng: </label>
                    <p>
                        -01 móc khóa
                        <br><br>
                        -01 móc khóa
                        <br><br>
                        -01 móc khóa
                    </p>
                </div>
                <div class="dts1">
                    <label class="qwer"> Tên Tác Giả: </label>
                    <p> Fuzuki23 </p>
                </div>
                <div class="dts1">
                    <label class="qwer"> Dịch Giả: </label>
                    <p> Thành Long </p>
                </div>
                <div class="dts1">
                    <label class="qwer"> Công ty phát hành: </label>
                    <p> HANWOK light novel </p>
                </div>
                <div class="dts1">
                    <label class="qwer"> Khổ sách: </label>
                    <p> 13x18cm </p>
                </div>
                <div class="dts1">
                    <label class="qwer"> Số Trang: </label>
                    <p> 352 Trang </p>
                </div>
                <div class="dts1">
                    <label class="qwer"> Nhà XUất Bản: </label>
                    <p> Kim ĐỒng </p>
                </div>
                <div class="dts1">
                    <label class="qwer"> Giá Tiền: </label>
                    <p> 120.000đồng </p>
                </div>
                <div class="dts1">
                    <label class="qwer"> Nội Dung: </label>
                    <?php echo '<p>'.$obj["description"].  '</p>' ; ?>
                </div>
                <div class="dts1">
                    <label class="qwer"> Trích Dẫn: </label>
                    <p> “Khi nào con thấy đau khổ, khúc ca này sẽ là liều thuốc chữa lành nhé.
                        Đây không phải là bản nhạc buồn đâu, mà là bản nhạc yêu thích của bà. Thế
                        nhưng chẳng hiểu sao cứ nghe bài này là bà lại khóc.
                        Tuy nhiên, cũng có lúc nước mắt lại là một phương thuốc đấy. Mỗi khi muốn
                        khóc là bà lại nghe bản nhạc này, và thế là nước mắt sẽ rơi. Kì lạ làm sao, bà
                        lại thấy khỏe mạnh hơn một chút, và có thể mỉm cười được rồi.
                        Vì thế nên con cũng hãy như vậy nhé. Mỗi khi bật khúc nhạc này, con có khóc
                        cũng không sao. Mỗi khi con khóc, những thứ đáng ghét cũng theo nước mắt
                        trôi đi, chắc chắn con sẽ cảm thấy ổn hơn.” </p>
                </div>
            </div>
        </div>
    </div>
    <div id="product-rating">
        <div class="title1"> Đánh Giá Sản Phẩm</div>
        <div class="rate-box">
            <div class="rate-star">
                <img src="assets/asdasd.png" alt="">
                <img src="assets/bcbdbcd.png" alt="">
            </div>
        </div>
    </div>
</div>
</body>
</html>

