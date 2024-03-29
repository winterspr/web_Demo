<?php
    include "../../connect.php";
    $name_product = $_POST['name_product'];
    $id_product = $_POST['id_product'];
    $quality_product = $_POST['quality_product'];
    $price_product = $_POST['price_product'];
    $photo = $_FILE['photo']['name'];
    $photo_tmp = $_FILE['photo']['tmp_name'];
    $sammary = $_POST['sammary'];
    $content = $_POST['content'];
    $state = $_POST['state'];

    if(isset($_POST['insert_product'])){
        if(isset($name_product)&&$name_product!=""){
            $photo = time().'_'.$photo;
            move_uploaded_file($photo_tmp, 'uploads/'.$photo);
            $sql = "insert into product_manage(name_product, id_product, quality_product, price_product, photo, sammary, content, state)
            values('".$name_product."', '".$id_product."', '".$quality_product."', '".$price_product."', '".$photo."', '".$sammary."', '".$content."', '".$state."')";
            mysqli_query($connect, $sql);
        }
    }
    else if(isset($_POST['fix_product'])){
        if($photo!=""){
            $photo = time() . '_' . $photo;
            move_uploaded_file($photo_tmp, 'uploads/'.$photo);
            $sql = "select * from product_manage where id__product = $_GET[id__product]";
            $result = mysqli_query($connnect, $sql);
            $each = mysqli_fetch_array($result);
            unlink('uploads/'.$each['photo']);
            $sql_upate = "update product_manage
            set
            name_product = '$name_product',
            id_product = '$id_product',
            quality_product = '$quality_product',
            price_product = '$price_product',
            photo = '$photo',
            sammary = '$sammary',
            content = '$content',
            state = '$state'
            where id__product = $_GET[id__product]";

        } else {
            $sql_upate = "update product_manage
            set 
            name_product = '$name_product',
            id_product = '$id_product',
            quality_product = '$qualityt_product',
            price_product = '$price_product',
            photo = '$photo',
            sammary = '$sammary',
            content = '$content',
            state = '$state'
            where id__product = $_GET[id__product]";
        }
    } else {
        $sql = "select * from product_manage where id__product = $_GET[id__product]";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        unlink('uploads/'.$each['photo']);
        $sql_delete = "delete from product_manage where id__product = $_GET[id__product]";
        mysqli_query($connect, $sql_delete);
    }

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
header('location:../../index.php?action=product_manage&query=insert');


