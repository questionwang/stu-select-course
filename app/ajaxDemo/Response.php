<?php

/**
 * Created by PhpStorm.
 * User: wlz
 * Date: 2015/10/4
 * Time: 17:17
 */
class Response
{
    public static function json($code,$message='',$data=array())
    {
        if (!is_numeric($code)) {
            return '';
        }
        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data
        );
        $jsondata=json_encode($result);

        return $jsondata;
    }

}