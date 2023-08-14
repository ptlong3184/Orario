<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="webfonts/bootstrap.css">
    <link rel="stylesheet" href="webfonts/all.css">
</head>
<body>
<div class="container">
    <h3 class="text-primary"> Them The Loai</h3>
</div>
<form action="product_save.php" method="post">
    <div class="mb-3 mt-3">
        <label for="productName" class="form-label">Tên Sản Phẩm</label>
        <input type="text" class="form-control" name="productName" id="productName">
    </div>
    <div class="mb-3 mt-3">
        <label for="quantity" class="form-label">Số Lượng</label>
        <input type="text" class="form-control" name="quantity" id="quantity">
    </div>
    <div class="mb-3 mt-3">
        <label for="price" class="form-label">Giá Tiền</label>
        <input type="text" class="form-control" name="price" id="price">
    </div>
    <div class="mb-3 mt-3">
        <label for="description" class="form-label">Mô tả</label>
        <input type="text" class="form-control" name="description" id="description">
    </div>
    <div class="mb-3 mt-3">
        <label for="category" class="form-label">Thể Loại</label>
        <input type="text" class="form-control" name="category" id="category">
    </div>
    <div class="mb-3 mt-3">
        <label for="producers" class="form-label">Nhà Xuất Bản</label>
        <input type="text" class="form-control" name="producers" id="producers">
    </div>
    <div class="mb-3 mt-3">
        <label for="image" class="form-label">Hình Ảnh</label>
        <input type="text" class="form-control" name="image" id="image">
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
</body>
</html>
