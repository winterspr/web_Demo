<?php
    $name_cate = $_POST['name_cate'];
    $index_cate = $_POST['index_cate'];
    require '../../connect.php';
    if(isset($_POST['insert_cate'])){
        $sql = "insert into product_category(name_cate, index_cate)
        values('$name_cate', '$index_cate')";
        $result = mysqli_query($connect, $sql);
    }else if(isset($_POST['fix_cate'])){
        $sql = "select * from product_category where id__procate = '$_GET[id__procate]'";
        $result = mysqli_query($connect, $sql);
        $sql_update = "update product_cate
        set
        name_cate = '$name_cate',
        index_cate = '$index_cate'
        where id__procate = '$id__procate'";
    } else {
        $sql = "select * from product_category where id__procate = '$_GET[id__procate]'";
        $result = mysqli_query($connect, $sql);
        $sql_delete = "delete product_category where id__procate = '$_GET[id__procate]'";
        mysqli_query($connect, $sql_delete);
    }


    header('location:../../index.php?action=product_category&query=insert');