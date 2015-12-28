<?php

/**
 * Created by PhpStorm.
 * User: wlz
 * Date: 2015/10/4
 * Time: 21:00
 */
class File
{
    private $dir;
    const  EXT='.txt';
    public function __construct(){
//        ��õ�ǰ�ļ�Ŀ¼$dir
        $this->dir=dirname(__FILE__).'/files/';
    }
    function getdir(){
        return $this->dir;
    }
    public function cacheData($key,$value='',$path=''){
        $filename=$this->dir.$path.$key.self::EXT;
        if($value!==''){
            $filedir=dirname($filename);
            if(!is_dir($filedir)){
                mkdir($filedir,0777);
            }
            return file_put_contents($filename,json_encode($value));
        }
    }
}