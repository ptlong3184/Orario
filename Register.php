<title>Sign Up </title>
<link rel="stylesheet" href="login.css">

<div class="login">
    <h2> Sign Up </h2>
    <form action="" method="post">
        <label>
            <input type="text" required id="name" name="username" placeholder="username">
        </label>
        <br>
                <label>
                    <input type="text" required id="sdt" name="phone" placeholder="phone number">
                </label>
                <br>
                <label>
                    <input type="text" required id="mail" name="email" placeholder="email">
                </label>
                <br>
        <label>
            <input type="password" required id="pass" name="password" placeholder="password">
        </label>
        <br>
                <label>
                    <input type="text" required id="dc" name="address" placeholder="address">
                </label>
                <br>
                <label>
                    <input type="radio" id="male" name="gender" value="Male">
                    <label for="male"> Male </label><br>
                    <input type="radio" id="female" name="gender" value="Female">
                    <label for="female"> Female </label>
                </label>
                <br>
        <button type="submit"> Sign Up </button>
        <br><br>
        <a href="index.php"> Về Trang Chủ </a>
    </form>
</div>

<?php
if($_SERVER["REQUEST_METHOD"] === 'POST'){
    if(isset($_POST["username"])){
        $username = $_POST["username"];
    }
    if(isset($_POST["phone"])){
        $phone = $_POST["phone"];
    }
    if(isset($_POST["email"])){
        $email = $_POST["email"];
    }
    if(isset($_POST["password"])){
        $password = $_POST["password"];
    }
    if(isset($_POST["address"])){
        $address = $_POST["address"];
    }
    if(isset($_POST["gender"])){
        $gender = $_POST["gender"];
    }

    $con=new mysqli("localhost","root","","project_1_web_ban_sach_nhom_13");
    if($con ->connect_error){
        die("Connection Error");
    }
    $sql = "INSERT INTO customers (name, phone, email,password, address,gender) VALUES ('".$username."', '".$phone."', '".$email."','".$password."', '".$address."','".$gender."')";

    if($con->query($sql) === TRUE){
        header("Location: login.php?Signed up successfully");
    }
    else{
        header("Location: Register.php?Sign up failed");
    }
}
?>