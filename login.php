<title>Sign In </title>
<link rel="stylesheet" href="login.css">

<div class="login">
    <h2> Sign In </h2>
    <form action="login_database.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
            <p style="border: 2px solid #00ff08; border-radius: 10px; padding:10px; backdrop-filter:blur(15px); color: #00ff08;">
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>
        <label>
            <input type="text" id="name" name="username" placeholder="username">
        </label>
        <br>
        <label>
            <input type="password" id="pass" name="password" placeholder="password">
        </label>
        <br>
        <button type="submit"> Sign In </button>
        <br><br>
        <a href="index.php"> Về Trang Chủ </a>
        <br><br>
        <p>Chưa có tài khoản?<a style="" href="Register.php">Đăng ký</a></p>
    </form>
</div>




