<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include '../../connect.php';
        $sql = "select * from product_category
        where id__procate = '$id__procate'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
    ?>
    <form action="modules/product_category/process.php?id__procate=<?php echo $each['id__procate']?>">
        <div>
            <p>Sửa Danh Mục</p>
            <label for="name">Name_DanhMuc</label>
            <input class="insert" type="text" name="name_cate" value="<?php echo $each['name_cate'] ?>">
            <br>
        </div>
        <div>
            <br>
            <label for="index">Index_DanhMuc</label>
            <input class="insert" type="text" name="index_cate" value="<?php echo $each['index_cate'] ?>">
            <br>
        </div>
        <div>
            <br>
            <input class="insertdanhmuc_them-btn" type="submit" name="fix_cate" value="Sửa Danh Mục Sản Phẩm">
        </div>
    </form>
</body>
</html>