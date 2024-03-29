<?php
    $sql = "select * from manufactures where id__mnf = $_GET[id__mnf]";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
?>

<div>
    <p>Sửa Thông tin</p>
    <form action="modules/manufactures/process.php?id__mnf=<?php echo $each['id__mnf'] ?>" method="post" enctype="multipart/form-data">
            <div>
                <label for="name">Tên Nhà Sản Xuất</label>
                <br>
                <input type="text" name="name__mnf" placeholder="Nhập Tên Nhà Sản xuất" class="mnf__insert" id="name" value="<?php echo $each['$name__mnf']?>">
                <br>
            </div>
            <div>
                <label for="photo">Logo Nhà Sản Xuất</label>
                <br>
                <img src="<?php echo 'uploads'.$each['logo__mnf'] ?>" alt="" width="150px">
                <br>
                <input type="file" name="logo__mnf" id="photo">
                <br>
            </div>
            <div>
                <label for="sammary">Tóm Tắt Về Nhà Sản Xuất</label>
                <br>
                <textarea name="sammary__mnf" id="sammary" class="mnf__insert" value="<?php echo $each['sammary__mnf'] ?>"></textarea>
                <br>
            </div>
            <div>
                <label for="state">Tình Trạng: </label>
                <br>
                <select name="state">
                    <?php
                        if($each['state'] == 1){
                    ?> 
                            <option selected value="1">ON</option>
                            <option value="0">OFF</option>
                    <?php } else { ?>
                        <option value="1">ON</option>
                        <option selected value="0">OFF</option>
                    <?php } ?>
                </select>
                <br>
            </div>
            <div>
                <input class="insertdanhmuc_them-btn" name="fix__mnf" type="submit" value="Sửa Nhà Sản Xuất">
            </div>
    </form>
</div>