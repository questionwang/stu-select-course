<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>me</title>
    <link rel="stylesheet" href="../css/jquery.mobile-1.4.5.css">
    <script style="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
    <script style="text/javascript" src="../js/jquery.mobile-1.4.5.min.js"></script>
</head>
<?php
    if(isset($_SERVER['status'])&&$_SERVER['status']==true){
  ?>
<!--此分支里就是用户已经处于登陆状态的时候了-->
        <!-- 在这里通过js实现显示条件-->
<?php
    }
?>
<body>
    <div id="index" data-role="page">
        <div data-role="header">
        </div>

        <div data-role="content" style="margin:0 10%;border:2px solid green">
            <div style="margin:5px 2%;height:150px;border:1px solid red;background-color: #9f5c5d">
                <!-- 未登陆的状态不显示用户名、积分值、收藏、粉丝等信息。登陆后就显示出来，要通过修改display值-->
                <a href="login.html" data-role="button"
                   style="background-color: #0088bb;margin-top:35px;margin-left: 30%;margin-right: 30%;">
                    <div style="display: block;background-color:lightgreen;">
                        <img id="imgs" src="../img/us.png" alt="未登录吗"/>
                        <span id="username" style="display: block;color: blue;">未登录</span>
                    </div>
                    <div id="logind-info" style="display: none">
                        <span id="jifen">jifen</span>
                        <span id="favorite">favorite</span>
                        <span id="fensi">fensi</span>
                    </div>

                </a>
            </div>
            <!-- 这里点击进入下一面后，在下一面要不要进行判断登陆状态？-->
            <div id="listdiv" style="background-color: #aaaaaa;padding: 5px 2%;margin:auto 2%;">
                <ul data-role="listview" data-inset="true" >
                    <li><a href="#"><img src="../img/us.png"
                                         alt="USA" class="ui-li-icon">啦啦啦啦</a>
                    </li>
                    <li><a href="#"><img src="../img/finland.png"
                                         alt="Great Britain" class="ui-li-icon"
                            >德玛西亚</a></li>

                    <li><a href="#"><img src="../img/us.png"
                                         alt="USA" class="ui-li-icon">啦啦啦啦</a>
                    </li>
                    <li><a href="#"><img src="../img/finland.png"
                                         alt="Great Britain" class="ui-li-icon"
                            >我的位置</a>
                    </li>
                </ul>
            </div>

        </div>
        <div data-role="footer" data-position="fixed" class="ui-field-contain">
            <a class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-icon-plus
            ui-btn-icon-notext ui-btn-b ui-mini" href="#">icon only button</a>
        </div>
    </div>
</body>
</html>