<?php
$conn = new mysqli("localhost", "root", "", "project_1_web_ban_sach_nhom_13");
if ($conn->connect_error) {
    die("Connection Error");
}

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);
?>
<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }
    $name = validate($_POST['username']);
    $pass = validate($_POST['password']);
    if (empty($name)) {
        header("Location: login.php?error=Username is required");
        exit();
    }else if(empty($pass)){
        header("Location: login.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM customers WHERE name='$name' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['name'] === $name && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['name'] = $row['name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: index.php?info=Logged in successfully, Welcome back $name");
            }else{
                header("Location: login.php?error=Incorrect Username or password");
            }
        }else{
            header("Location: login.php?error=Incorrect Username or password");
        }
        exit();
    }
}
?>
