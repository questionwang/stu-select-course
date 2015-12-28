<?php
//header("Content-Type:application/json;charset=utf-8");
header("Content-Type:text/html;charset=utf-8");
//
//$data=array("name"=>"wlz","qqmail"=>"2505013465@qq.com","passwd"=>"wlz");
//$datajson=json_encode($data);
//var_dump($datajson);
//
//下面两行是xhr2技术，用于解决不能跨域访问的问题。但这种方式对于ie浏览器不行
header("Access-Control-Allow-Origin:*");
//*里可以是你有权限的主机域名啊啊啊，这里是代表全部外来域
header("Access-Control-Allow-Method:POST,GET");

if($_SERVER['REQUEST_METHOD']=="GET"){
    search();
}elseif($_SERVER['REQUEST_METHOD']=="POST"){
    create();
}
function search(){
    if($_GET['name']=='wlz'){
        $jsondata=json_encode(array('message'=>$_GET['name']));
        echo $jsondata;
    }
}
function create(){
    $thevalue=$_POST['name'];
    if(empty($thevalue))
    {
        echo "参数错误";
        echo $_POST['name'];
    }elseif($thevalue=='wlz'){
        $data=array('name'=>"wlz","qqmail"=>"2505013465@qq.com","passwd"=>"wlz");
//        $postjson=json_encode($data);
//        var_dump($postjson);
        echo $data['qqmail'];
    }
}