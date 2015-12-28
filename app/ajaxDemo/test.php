<?php
/**
 * 测试Response.php文件
 * Created by PhpStorm.
 * User: wlz
 * Date: 2015/10/4
 * Time: 17:24
 */
require_once 'Response.php';

//客户端发送的数据
$arr=array(
    'name'=>'wlz',
    'age'=>'21',
    'sex'=>'m'
);
$jd=Response::json(200,'传输成功',$arr);
echo $jd;