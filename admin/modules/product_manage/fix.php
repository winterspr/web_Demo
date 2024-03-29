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
        $sql = "select * from product_manage
        where id__product = $_GET[id__product]";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
    ?>
    <form action="modules/product_manage/process.php?id__product=<?php echo $_GET['id__product'] ?>" method="post" enctype="multipart/form-data">
    <div>
            <p>Khu Vực Quản Lí Sản Phẩm</p>
            <label for="name">Tên Sản Phẩm: </label>
            <input class="insert" type="text" name="name_product" value="<?php echo $each['name_product'] ?>">
            <br>
        </div>
        <div>
            <label for="id_product">Mã Sản Phẩm: </label>
            <input class="insert" type="text" name="id_product" value="<?php echo $each['id_product'] ?>">
            <br>
        </div>
        <div>
            <label for="quality">Số Lượng: </label>
            <input class="insert" type="text" name="quality_product" value="<?php echo $each['quality_product'] ?>">
            <br>
        </div>
        <div>
            <label for="price">Giá: </label>
            <input class="insert" type="text" name="price_product" value="<?php echo $each['price_product'] ?>">
            <br>
        </div>
        <div>
            <label for="photo">Hình Ảnh: </label>
            <img src="modules/product_manage/uploads/<?php echo $each['photo'] ?>" alt="">
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
        <div>
            <label for="Manufactures">Nhà Sản Xuất</label>
            <?php
                $sql = "select * from manufactures";
                $result = mysqli_query($connect, $sql);
            ?>
            <select name="manufacture_id" id="">
                <?php foreach($result as $each): ?>
                    <option value="<?php echo $each['id__mnf'] ?>">
                        <?php echo $each['name__mnf'] ?>;
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="product_manage">Danh Mục</label>
            <?php 
                $sql = "select * from product_manage";
                $result = mysqli_query($connect, $sql);
            ?>
            <select name="product_id" id="">
                <?php foreach($result_i as $each): ?>
                    <option value="<?php echo $each['id__procate'] ?>">
                        <?php echo $each['name_cate'] ?>;
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <br>
            <input class="insertdanhmuc_them-btn" type="submit" name="fix_product" value="Ssửa Sản Phẩm">
        </div>
    </form>
</body>
</html>