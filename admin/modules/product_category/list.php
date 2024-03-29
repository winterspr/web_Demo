<?php
    include '../../connect.php';
    $sql = "select * from product_category order by id__procate";
    $result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1' width="100%">
        <tr>
            <th>Mã Danh Mục Sản Phẩm</th>
            <th>Danh Mục</th>
            <th>Quản Lí</th>
        </tr>
        <?php foreach($result as $each): ?>
            <tr>
                <td><?php echo $each['id__procate'] ?></td>
                <td><?php echo $each['name_cate'] ?></td>
                <td >
                    <a href="?action=product_category&query=fix&id__procate=<?php echo $each['id__procate'] ?>">Sửa</a>
                    <a href="modules/product_category/process.php?id__procate=<?php echo $each['id__procate'] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>