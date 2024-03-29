<?php
            include '../../connect.php';
            $sql = "SELECT * FROM product_manage INNER JOIN product_category ON product_manage.id__procate = product_category.id__procate ORDER BY id__product DESC";
            $result = mysqli_query($connect, $sql);
            // $sql_i = "select * from product_manage inner join manufactures on product_manage.id__mnf = manufactures.id__mnf order by id__product desc";
            // $result_i = mysqli_query($connect, $sql_i);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
    <table border='1' width='100%'>
        <tr>
            <th>ID</th>
            <th>Tên Sản Phẩm</th>
            <th>Mã Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Giá</th>
            <th>Hình Ảnh</th>
            <th>Tóm Tắt</th>
            <th>Nội Dung</th>
            <th>Nhà Sản Xuất</th>
            <th>Danh Mục</th>
            <th>Tình Trạng</th>
            <th>Quản lí</th>
        </tr>
        <?php
            foreach($result as $each):
        ?>
            <tr>
                <td><?php echo $each['id__product'] ?></td>
                <td><?php echo $each['name_product'] ?></td>
                <td><?php echo $each['id_product'] ?></td>
                <td><?php echo $each['quality_product'] ?></td>
                <td><?php echo $each['price_product'] ?></td>
                <td><img src="modules/product_manage/uploads/<?php echo $each['photo'] ?>" alt=""></td>
                <td><?php echo $each['sammary'] ?></td>
                <td><?php echo $each['content'] ?></td>
                <td><?php echo $each['name_cate'] ?></td>
                <td><?php if ($each['state']==1){
                    echo "ON";
                } else {
                    echo "OFF";
                }
                ?></td>
                <td>
                    <a href="modules/product_manage/process.php?id__product=<?php echo $each['id__product'] ?>">Xóa</a> |
                    <a href="?action=product_manage&query=fix&id__product=<?php echo $each['id__product'] ?>">Sửa</a>
                </td>
            </tr>

        <?php endforeach ?>
    </table>
</body>
</html>