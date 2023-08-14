<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        html, body{
            margin: 0;
            background-color: rgb(26, 26, 26);
        }

    </style>
    <title>Web bán sách</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div id="wrapper">
    <div id="header">
        <a href="" class="logo">
            <img src="assets/rsz_2340091474_119745644417144_5346238063151575853_n.png" alt="">
<!--            <img src="assets/rsz_345665175_1860295224356052_7082850116933841207_n.jpg" alt="">-->
        </a>
        <div id="menu">
            <div class="item">
                <a href="http://localhost/1405/project_1_web_ban_sach_nhom_13/"> Trang Chủ </a>
            </div>
            <div class="item">
                <a href="product.php"> Sản phẩm </a>
            </div>
            <div class="item">
                <a href=""> Blog </a>
            </div>
            <div class="item">
                <a href=""> Liên Hệ </a>
            </div>
            <div class="item">
                <a href="orders_list.php"> Danh Sách mua haàng </a>
            </div>
        </div>
        <div id="actions">
            <div class="item">
                <button><a href="login.php"> Đăng Nhập </a></button>
            </div>
            <div class="item">
                <button><a href="product_cart.php"> Giỏ Hàng </a> </button>
            </div>
        </div>
    </div>
    <?php if (isset($_GET['info'])) { ?>
        <p style="border: 2px solid #00ff08; border-radius: 10px; padding:10px; backdrop-filter:blur(15px); color: #00ff08;">
            <?php echo $_GET['info']; ?>
        </p>
    <?php } ?>
    <div id="banner">
        <div class="box-left">
            <h2>
                <span>Sách Và Truyện</span>
            </h2>
            <p>Đem đến cho độc giả những mẩu truyện hay cùng với những cuốn sách mới lạ giúp người đọc cải thiện cuộc sống</p>
            <button>Mua ngay</button>
        </div>
        <div class="box-right">
            <img src="assets/aaaaa.jpg" alt="">
            <img src="assets/bbbb.jpg" alt="">
            <img src="assets/ccccc.jpg" alt="">
        </div>
        <div class="to-bottom">
            <a href="">
                <img src="assets/to_bottom.png" alt="">
            </a>
        </div>
    </div>

<!--    product-->

        <?php


        $con = new mysqli("localhost", "root", "", "project_1_web_ban_sach_nhom_13");
        $sql = "SELECT * FROM books";
        $result = $con->query($sql);

        if($result->num_rows>0){


            echo'<div id="wp-products">';
            echo'<h2>Sản Phẩm Bán Chạy</h2>';
                echo '<ul id="list-products">';
                while($row=$result->fetch_assoc()){
                            echo'<div class="item" >';
                                echo"<a href='product_detail.php?id=".$row['id']."'>";
                                echo'<img src="assets/'.$row["image"].'" style="width: 300px" alt="">';
                                echo'<div class="star">';
                                    echo'<span><img src="assets/star.png" alt=""></span>';
                                    echo'<span><img src="assets/star.png" alt=""></span>';
                                    echo'<span><img src="assets/star.png" alt=""></span>';
                                    echo'<span><img src="assets/star.png" alt=""></span>';
                                    echo'<span><img src="assets/star.png" alt=""></span>';
                                echo'</div>';
                                echo'<div class="name">'.$row["name"].'</div>';
                                echo'<div class="desc">'.$row["description"]. '</div>';
                                echo'<div class="price">Giá: '.$row["price"].'<sup>đ</sup></div>';
                                    echo'<div class="buy"> Mua Ngay</div>';
                                echo'</a>';
                            echo'</div>';
                 }
                echo'</ul>';
            echo'</div>';

        }

        ?>


<!--        COMMENT-->
        <div id="comment">
            <h2>Đánh Giá Của Khách Hàng</h2>
            <div id="comment-body">
                <div class="prev">
                    <a href="#">
                        <img src="assets/prev.png" alt="">
                    </a>
                </div>
                <ul id="list-comment">
                    <li class="item">
                        <div class="avatar">
                            <img src="assets/namthoi.jpg" alt="">
                        </div>
                        <div class="name"> Nam Thối </div>
                        <div class="stars">
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
                        </div>
                        <div class="text">
                            <p>Tôi rất hài lòng về chất lượng những cuốn sách và thái độ phục vụ của cửa hàng này</p>
                        </div>
                </ul>
                <div class="next">
                    <a href="#">
                        <img src="assets/next.png" alt="">
                    </a>
                </div>
            </div>
        </div>

<!--        FOOTER-->
        <div id="footer">
            <div class="box">
                <div class="logo">
                    <img src="assets/rsz_2340091474_119745644417144_5346238063151575853_n.png" alt="">
<!--                    <img src="assets/rsz_345665175_1860295224356052_7082850116933841207_n.jpg" alt="">-->
                </div>
                <p> Địa chỉ: </p>
                <p> Cơ sở duy nhất: 123 Tạ Quang Bửu Hai Bà Trưng Hà Nội </p>
                <p> Hotline: 0123456789 </p>
            </div>
            <div class="box">
                <h3> Nội Dung</h3>
                <ul class="quick-menu">
                    <div class="item">
                        <a href=""> Trang Chủ</a>
                    </div>
                    <div class="item">
                        <a href=""> Sản Phẩm</a>
                    </div>
                    <div class="item">
                        <a href="">Blog</a>
                    </div><div class="item">
                        <a href="">Liên hệ</a>
                    </div>
                </ul>
            </div>
            <div class="box">
                <h3>LIÊN HỆ</h3>
                <form action="">
                    <label>
                        <input type="text" placeholder="Địa chỉ email">
                    </label>
                    <button>Nhận Thông Báo</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>