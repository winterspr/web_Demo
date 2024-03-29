<?php
    // $name = $_POSST['name'];
    // $password = $_POST['password'];
    // $sdt = $_POST['sdt'];

    $email = $name = $password = $sdt = "";
    $emailrr = $namerr = $passwordrr = $sdtrr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['email'])){
            $emailrr = "email is required";
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailrr = "email address must be well_formed";
            }
        }
        if(empty($_POST['name'])){
            $namerr = "name is required";
        } else {
            $name = $_POST['name'];
            if(!preg_match("/^[a-zA-Z-' ]*/", $name)){
                $namerr = "name only contains letter or whitespace";
            }
        }
        if(empty($_POST['password'])){
            $passwordrr = "password is required";
        } else {
            $password = $_POST['password'];
            if(!preg_match("/^[a-zA-Z-0-9' ]*/", $password)){
                $passwordrr = "password only contains letter or whitespace or number";
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

    require '../admin/connect.php';
    $sql = "select count(*) from customers
    where email = '$email'";
    $result = mysqli_query($connect, $sql);
    $number_rows = mysqli_fetch_array($result)['count(*)'];

    if($number_rows == 1){
        session_start();
        $_SESSION['error'] = "Tài khoản đã tồn tại. Vui lòng  nhập lại";
        header('location:signup.php');
    }

    $sql = "insert into customers(email, name, password, sdt)
    values ('$email', '$name', '$password', '$sdt')";
    mysqli_query($connect, $sql);

    require 'mail.php';
    $title = "Chúc bạn đăng kí thành công";
    $content = "Chúc bạn đã trở thành thành viên của chúng tôi";
    sendemail($email, $name, $title, $content);

    $sql = "select id from customers
    where email = '$email'";
    $result = mysqli_query($connect, $sql);
    $id = mysqli_fetch_array($result)['id'];
    session_start();
    $_SESSION['name'] = $name;
    mysqli_close($connect);



