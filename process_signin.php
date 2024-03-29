<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    require '../admin/connect.php';
    $sql ="select * from customers
    where email = '$eamil' and password = '$password'";
    $result = mysqli_query($connect, $sql);
    $number_rows = mysqli_fetch_array($result);

    if($number_rows == 1){
        header('location:index.php?error = "Đăng nhập thành công"');
        session_start();
    } else {
        header('location:signin.php?error="Bạn đã nhập sai email or password"');
    }

    mysqli_close($connect);