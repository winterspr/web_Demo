<?php
    if(isset($_GET['action'])&&isset($_GET['query'])){
        $tam=$_GET['action'];
        $query=$_GET['query'];
    }else{
        $tam='';
        $query='';
    }
    if($tam=='manufactures' && $query=='insert'){
        include("manufactures/insert.php");
        include("manufactures/list.php");
    } else if($tam=='manufactures' && $query=='fix'){
        include("manufactures/fix.php");
    }
    if($tam=="product_category" && $query=="insert"){
        include("product_category/insert.php");
        include("product_category/list.php");
    } else if($tam=='product_category' && $query=='fix'){
        include("product_category/fix.php");
    }
    if($tam=="product_manage" && $query=="insert"){
        include("product_manage/insert.php");
        include("product_manage/list.php");
    } else if($tam=='product_manage' && $query=='fix'){
        include("product_manage/fix.php");
    }
    else{
        include("modules/dashboard.php");
    }