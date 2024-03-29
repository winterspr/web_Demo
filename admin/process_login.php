<?php

    $email = $_POST['email'];
    $password_admin = $_POST['password_admin'];

    require 'connect.php';
    $sql ="select * from tbl_admin
    where email = '$email' and password_admin = '$password_admin'";
    $result = mysqli_query($connect, $sql);
    

    if(mysqli_num_rows($result) == 1){
        // $number_rows = mysqli_fetch_array($result);
        $_SESSION['login']=$username;
        session_start();
        // $_SESSION['id_admin'] = $number_rows['id_admin'];
        // $_SESSION['username'] = $number_rows['username'];
        // $_SESSION['admin_state'] = $number_rows['admin_state'];
        header('location:index.php?success="Đăng nhập thành công"');
        exit;
    } else {
        header('location:login.php?error="Bạn đã nhập sai email or password"');
    }

    mysqli_close($connect);