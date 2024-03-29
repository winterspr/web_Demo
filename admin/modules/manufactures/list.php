<?php
    include '../../connect.php';
    $sql = "select * from manufactures";
    $result = mysqli_query($connect, $sql);
    // $each = mysqli_fetch_array($result);
?>

<table border="1" width="100%">
    <tr>
        <th>Mã Nhà Sản Xuất</th>
        <th>Tên Nhà Sản Xuất</th>
        <th>LOGO</th>
        <th>Mô Tả</th>
        <th>State</th>
        <th>Thực Hiện</th>
    </tr>
    <?php foreach ($result as $each): ?>
        <tr>
            <td><?php echo $each['id__mnf'] ?></td>
            <td><?php echo $each['name__mnf'] ?></td>
            <td><img src="modules/manufactures/uploads/<?php echo $each['logo__mnf'] ?>" alt="" width="120px"></td>
            <td><?php echo $each['sammary__mnf'] ?></td>
            <td><?php if($each['state'] == 1) {
                echo "ON";
            } else {
                echo "OFF";
            }
            ?></td>
            <td>
                <a href="?action=manufactures&query=fix&id__mnf=<?php echo $each['id__mnf'] ?>">Sửa</a>
                <a href="modules/manufactures/process.php?id__mnf=<?php echo $each['id__mnf']?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>