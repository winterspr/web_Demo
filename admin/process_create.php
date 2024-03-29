<?php
    // $name = $_POSST['name'];
    // $password = $_POST['password'];
    // $sdt = $_POST['sdt'];

    $email = $username = $password_admin = $sdt = "";
    $emailrr = $usernamerr = $passwordrr_admin = $sdtrr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['email'])){
            $emailrr = "email is required";
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailrr = "email address must be well_formed";
            }
        }
        if(empty($_POST['username'])){
            $usernamerr = "name is required";
        } else {
            $username = $_POST['username'];
            if(!preg_match("/^[a-zA-Z-' ]*/", $username)){
                $usernamerr = "name only contains letter or whitespace";
            }
        }
        if(empty($_POST['password_admin'])){
            $password_adminrr = "password is required";
        } else {
            $password_admin = $_POST['password_admin'];
            if(!preg_match("/^[a-zA-Z-0-9' ]*/", $password)){
                $password_adminrr = "password only contains letter or whitespace or number";
            }
        }
        if(empty($_POST['sdt'])){
            $sdtrr = "sdt is required";
        } else {
            $sdt = $_POST['sdt'];
            if(!preg_match("/^[0-9' ]*/", $sdt)){
                $namerr = "sdt only contains number";
            }
        }
    }

    require 'connect.php';
    $sql = "select count(*) from tbl_admin
    where id_admin = '$id_admin'";
    $result = mysqli_query($connect, $sql);
    $number_rows = mysqli_fetch_array($result)['count(*)'];

    if($number_rows == 1){
        session_start();
        $_SESSION['error'] = "Tài khoản đã tồn tại. Vui lòng  nhập lại";
        header('location:create.php');
    }

    $sql = "insert into tbl_admin(email, username, password_admin, sdt)
    values ('$email', '$username', '$password_admin', '$sdt')";
    mysqli_query($connect, $sql);
    header('location:login.php?success="Đăng ký thành công"');

    require '../mail.php';
    $title = "Chúc bạn đăng kí thành công";
    $content = "Chúc bạn đã trở thành thành viên của chúng tôi";
    sendemail($email, $name, $title, $content);

    $sql = "select id_admin from tbl_admin
    where id_admin = '$id_admin'";
    $result = mysqli_query($connect, $sql);
    $id_admin = mysqli_fetch_array($result)['id_admin'];
    session_start();
    $_SESSION['username'] = $username;
    
    mysqli_close($connect);
    