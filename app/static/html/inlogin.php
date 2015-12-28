<?php
header('content-type:text/html;charset=uft-8');
$na=$_POST['name'];
var_dump($na);

$pas=$_POST['pass'];
var_dump($pas);

if($na=='wlz'&&$pas=='wlz'){
    ?>

    <a href="http://www.debugcode.cn" style="text-decoration: snow">首页</a>
    <script type="text/javascript">
        alert("登陆成功，欢迎回来")

    </script>
<?php
}else{
    ?>
    <div style="text-align: center;color:lightslategrey;margin:200px 30%;font-size: larger">
        <span>登陆失败<input type="button" value="重新登陆" onclick="rein()"></span>
        <script type="text/javascript">
            function rein(){
                window.history.back();
            }
        </script>
    </div>
<?php
}