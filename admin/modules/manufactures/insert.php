<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p>Khu Vực Nhà Sản Xuất</p>
        <form action="modules/manufactures/process.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="name">Tên Nhà Sản Xuất</label>
                <br>
                <input type="text" name="name__mnf" placeholder="Nhập Tên Nhà Sản xuất" class="insert" id="name">
                <br>
            </div>
            <div>
                <label for="photo">Logo Nhà Sản Xuất</label>
                <br>
                <input type="file" name="logo__mnf" id="photo">
                <br>
            </div>
            <div>
                <label for="sammary">Tóm Tắt Về Nhà Sản Xuất</label>
                <br>
                <textarea name="sammary__mnf" id="sammary" class="insert"></textarea>
                <br>
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
            <!-- <button class="mnf__insertdanhmuc_them-btn" name="insert__mnf">
                Thêm Nhà Sản Xuất
            </button> -->
            <div>
                <input class="insertdanhmuc_them-btn" name="insert__mnf" type="submit" value="Thêm Nhà Sản Xuất">
            </div>
        </form>
    </div>
</body>
</html>