<?php
require_once ("connection.php");
$con = new mysqli(ConnectionInfo::$name, ConnectionInfo::$username,ConnectionInfo::$password, ConnectionInfo::$database);
if ($con->connect_error){
    die("loi ket noi");
}
$mysql ="select * from ordering";
$kq =$con->query($mysql);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<h3 style="text-align: center">ORDER LIST</h3>
<div class="container">
    <table class="table table-dark table-hover">
        <thead class="bg-info">
        <tr>
            <td>Mã</td>
            <td>Tên</td>
            <td>Địa Chỉ</td>
            <td>SĐT</td>
            <td>Date Buy</td>
            <td>Status</td>
            <td></td>
        </tr>
        </thead>

        <tbody>
        <?php
        if ($kq ->num_rows>0){
            while ($row = $kq->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["cust_name"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["phone"]."</td>";
                echo "<td>".$row["date_buy"]."</td>";
                echo "<td>".$row["status"]."</td>";

                echo "<td><a class='btn btn-info btn-sm' href='orders_update_status.php?id=".$row["id"]."&status=ACCEPTED'> Accepted </a></td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>

