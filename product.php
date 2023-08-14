<?php
require_once ("connection.php");
$con = new mysqli(ConnectionInfo::$name, ConnectionInfo::$username,ConnectionInfo::$password, ConnectionInfo::$database);
if ($con->connect_error){
    die("loi ket noi");
}
$mysql ="select * from books";
$kq =$con->query($mysql);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<h3>PRODUCT LIST</h3>
<div class="container">
    <a href="admin_add_product.php" class='btn btn-info btn-sm'> Thêm Sản Phẩm </a>
    <table class="table table-dark table-hover">
        <thead class="bg-info">
        <tr>
            <td>Mã</td>
            <td>Tên</td>
            <td>Số tồn</td>
            <td>Giá tiền</td>
            <td>Mô tả</td>
            <td>Thể Loại</td>
            <td>Nhà xuất bản</td>
            <td>Ảnh</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </thead>

        <tbody>
        <?php
        if ($kq ->num_rows>0){
            while ($row = $kq->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["quantity"]."</td>";
                echo "<td>".$row["price"]."</td>";
                echo "<td>".$row["description"]."</td>";
                echo "<td>".$row["category_id"]."</td>";
                echo "<td>".$row["producer_id"]."</td>";
                echo"<td><img src='assets/".$row['image']."' style = 'width: 70px'></td>";
                echo"<td><a href='product_detail.php?id=".$row["id"]."'>Details</a></td>";
                echo"<td><a href='product_delete.php?id=".$row["id"]."'>Delete</a></td>";
                echo"<td><a href='edit_product.php?id=".$row["id"]."'>Update</a></td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>

