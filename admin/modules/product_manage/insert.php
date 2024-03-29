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
        $sql = "select * from manufactures";
        $result = mysqli_query($connect, $sql);
        $sql_i = "select * from product_category";
        $result_i = mysqli_query($connect, $sql_i);
    ?>
    <form action="modules/product_manage/process.php" method="POST" enctype="multipart/form-data">
        <div>
            <p>Khu Vực Quản Lí Sản Phẩm</p>
            <label for="name">Tên Sản Phẩm: </label>
            <input class="insert" type="text" name="name_product" placeholder="Nhập Tên Sản Phẩm">
            <br>
        </div>
        <div>
            <label for="id_product">Mã Sản Phẩm: </label>
            <input class="insert" type="text" name="id_product" placeholder="Nhập Mã Sản Phẩm">
            <br>
        </div>
        <div>
            <label for="quality">Số Lượng: </label>
            <input class="insert" type="text" name="quality_product" placeholder="Nhập Số Lượng Sản Phẩm">
            <br>
        </div>
        <div>
            <label for="price">Giá: </label>
            <input class="insert" type="text" name="price_product" placeholder="Nhập Giá Sản Phẩm">
            <br>
        </div>
        <div>
            <label for="photo">Hình Ảnh: </label>
            <input class="insert" type="file" name="photo">
            <br>
        </div>
        <div>
            <label for="sammary">Tóm Tắt: </label>
            <input class="insert" type="textarea" name="sammary">
            <br>
        </div>
        <div>
            <label for="content">Nội Dung: </label>
            <input class="insert" type="textarea" name="content">
            <br>
        </div>
        <!-- <div>
            <label for="Manufactures">Nhà Sản Xuất</label>
            <select name="manufacture_id" id="">
                <?php foreach($result as $each): ?>
                    <option value="<?php echo $each['id__mnf'] ?>">
                        <?php echo $each['name__mnf'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div> -->
        <div>
            <label for="product_manage">Danh Mục</label>
            <select name="product_id" id="">
                <?php foreach($result_i as $each): ?>
                    <option value="<?php echo $each['id__procate'] ?>">
                        <?php echo $each['name_cate'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="state">Tình Trạng: </label>
            <br>
            <select name="state">
                <option value="1">ON</option>
                <option value="0">OFF</option>
            </select>
            <br>
        </div>
        <div>
            <br>
            <input class="insertdanhmuc_them-btn" type="submit" name="insert_product" value="Thêm Sản Phẩm">
        </div>
    </form>
</body>
</html>