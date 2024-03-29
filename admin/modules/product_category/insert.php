<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="modules/product_category/process.php" method="post" enctype="multipart/form-data">
        <div>
            <p>Thêm Danh Mục Sản Phẩm</p>
            <label for="name">Name_DanhMuc</label>
            <br>
            <br>
            <input class="insert" type="text" name="name_cate" placeholder="Nhập Tên danh mục sản phẩm">
        </div>
        <div>
            <br>
            <label for="index">Index_DanhMuc</label>
            <br>
            <br>
            <input class="insert" type="text" name="index_cate" placeholder="Nhập Tên danh mục sản phẩm">
        </div>
        <div>
            <br>
            <input class="insertdanhmuc_them-btn" type="submit" name="insert_cate" value="Thêm Danh Mục Sản Phẩm">
        </div>
    </form>
</body>
</html>