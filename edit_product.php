<?php
$id =$_GET["id"];

$sql = "select * from books where id= $id";
$con = new mysqli("localhost","root","","project_1_web_ban_sach_nhom_13");
if ($con ->connect_error) {
    die("Loi ket noi");
}
$result =$con->query($sql);

$obj =null;
if ($result!== false && $result-> num_rows > 0){
    while ($row =$result->fetch_assoc()){
        $obj =$row;
    }
}
?>
    <form action="" method="post">
        <input type="text"  value="<?php echo $obj['id']; ?>" >
        <br><br>
        <input type="text" name="name" class="input form-control" value="<?php echo $obj['name']; ?>" >
        <br><br>
        <input type="text" name="quantity" class="input form-control" value="<?php echo $obj['quantity']; ?>" >
        <br><br>
        <input type="text" name="price" class="input form-control" value="<?php echo $obj['price']; ?>" >
        <br><br>
        <input type="text" name="description" class="input form-control" value="<?php echo $obj['description']; ?>" >
        <br><br>
        <input type="text" name="category" class="input form-control" value="<?php echo $obj['category_id']; ?>" >
        <br><br>
        <input type="text" name="producers" class="input form-control" value="<?php echo $obj['producer_id']; ?>" >
        <br><br>
        <input type="submit" value="Update">
        <br><br>
        <button><a href="product.php">Toi Bang Ghi></button>

    </form>

<?php
if($_SERVER["REQUEST_METHOD"] === 'POST'){
    if(isset($_POST["name"])){
        $name = $_POST["name"];
        $quantity= $_POST["quantity"];
        $price = $_POST["price"];
        $description = $_POST["description"];
        $category = $_POST["category"];
        $producers = $_POST["producers"];
    }

    $con = new mysqli("localhost","root", "", "project_1_web_ban_sach_nhom_13");
    if($con ->connect_error){
        die("Connection Error");
    }
    $sql = "UPDATE books SET name=('".$name."'), quantity=('".$quantity."'), price=('".$price."'), description=('".$description."'), category_id=('".$category."'), producer_id=('".$producers."')";

    if($con->query($sql) === TRUE){
        echo"UPDATE SUCCESS";
    }
    else{
        echo"ERROR UPDATING".$con->error;
    }
}
?>

