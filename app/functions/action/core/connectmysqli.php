<?php
try{
    $conn=new mysqli('localhost','root','123wlz','stumanager');
}catch (Exception $e){
    die("���ݿ�����ʧ��".$e->getMessage());
}