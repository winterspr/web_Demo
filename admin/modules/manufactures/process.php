<?php
    include ('../../connect.php');
    $name__mnf = $_POST['name__mnf'];
    $logo__mnf = $_FILES['logo__mnf']['name'];
    $logo__mnf_tmp = $_FILES['logo__mnf']['tmp_name'];
    $sammary__mnf = $_POST['sammary__mnf'];
    $state = $_POST['state'];
    // $folder = 'uploads/';
    // $file_extension = explode('.' , $logo__mnf['name'])[1];
    // $file_name = time() . '.' . $file_extension;
    // $path_file = $folder . $file_name;
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($path_file,PATHINFO_EXTENSION));

    
    
    if(isset($_POST['insert__mnf'])){
        // $check = getimagesize($logo__mnf["tmp_name"]);
        // if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        // $uploadOk = 1;
        // } else {
        // echo "File is not an image.";
        // $uploadOk = 0;
        // }
        // if (file_exists($path_file)) {
        //     echo "Sorry, file already exists.";
        //     $uploadOk = 0;
        //   }
          
        //   // Check file size
        //   if ($photo["size"] > 500000) {
        //     echo "Sorry, your file is too large.";
        //     $uploadOk = 0;
        //   }
          
        //   // Allow certain file formats
        //   if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        //   && $imageFileType != "gif" && $imageFileType != "jfif") {
        //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        //     $uploadOk = 0;
        //   }
          
          // Check if $uploadOk is set to 0 by an error
        //   if ($uploadOk == 0) {
        //     echo "Sorry, your file was not uploaded.";
        //   // if everything is ok, try to upload file
        //   } else {
        //     if (move_uploaded_file($logo__mnf["tmp_name"], "uploads." . $logo__mnf)) {
        //       echo "The file ". htmlspecialchars( basename( $logo__mnf["name"])). " has been uploaded.";
        //     } else {
        //       echo "Sorry, there was an error uploading your file.";
        //     }
        //   }
        $logo__mnf = time() . '_' . $logo__mnf;
        move_uploaded_file($logo__mnf_tmp, "uploads/" . $logo__mnf);
        $sql = "insert into manufactures(name__mnf, logo__mnf, sammary__mnf, state)
        values('" . $name__mnf . "','" . $logo__mnf . "','" . $sammary__mnf . "','" . $state . "')";
        mysqli_query($connect, $sql);
        
    }
    else if(isset($_POST['fix__mnf'])) {
        // kiểm tra có thay đổi hình ảnh
        if($logo__mnf != ''){
            $sql_logo = "select * from manufactures where id__mnf = $_GET[id__mnf]";
            $result = mysqli_query($connect, $sql_logo);
            $each = mysqli_fetch_array($result);
            unlink('uploads/'.$each['logo__mnf']);
            $logo__mnf = time() . '_' . $logo__mnf;
            move_uploaded_file($logo__mnf_tmp, "uploads/" . $logo__mnf);
            $sql_update = "update manufactures
            set
            name__mnf = '$name__mnf',
            logo__mnf = '$logo__mnf',
            sammary__mnf = '$sammary__mnf',
            state = '$state'
            where id__mnf = $_GET[id__mnf];
            ";
        } else {
            $sql_update = "update manufactures
            set
            name__mnf = '$name__mnf',
            sammary__mnf = '$sammary__mnf',
            state = '$state'
            where id__mnf = $_GET[id__mnf]
            ";
        }
        mysqli_query($connect, $sql_update);
    } else {
        $sql_logo = "select * from manufactures where id__mnf = $_GET[id__mnf]";
        $result = mysqli_query($connect, $sql_logo);
        $each = mysqli_fetch_array($result);
        unlink('uploads/'.$each['logo__mnf']);
        
        $sql_delete = "delete from manufactures where id__mnf = $_GET[id__mnf]";
        mysqli_query($connect, $sql_delete);
    }
    

    header('location:../../index.php?action=manufactures&query=insert');
