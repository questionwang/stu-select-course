<?php
try{
    $conn=new mysqli('localhost','root','123wlz','stumanager');
}catch (Exception $e){
    die("数据库连接失败".$e->getMessage());
}