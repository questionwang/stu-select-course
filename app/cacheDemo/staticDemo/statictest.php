<?php
/**
 * Created by PhpStorm.
 * User: wlz
 * Date: 2015/10/4
 * Time: 21:14
 */
$arrdata=array(
    'id'=>1,
    'name'=>'wlz',
    'sex'=>'man'
);
require_once 'File.php';

$fileobj=new File();
echo $fileobj->getdir();