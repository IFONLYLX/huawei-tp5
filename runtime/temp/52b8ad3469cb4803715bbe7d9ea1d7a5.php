<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\phpstudy\WWW\tp5\public/../app/admin\view\login\login.html";i:1510838567;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>管理员登录界面</title>
    <link rel="shortcut icon" href="__PUBLIC__/favicon.ico">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__CSS__/login.css">
    <link rel="stylesheet" type="text/css" href="__CSS__/iconfont.css">
    <script src="__JS__/all/jquery-1.10.2.min.js"></script>
</head>
<body>
<div class="login-set">
    <form style=" opacity: 0.8;" class="form-horizontal" action="<?php echo url('admin/checklogin'); ?>" method="post" name="form"
          onSubmit="return InputCheck(this)">
        <img class="img-responsive center-block" src="__PUBLIC__/logo.png">
        <a href="<?php echo url('index/index/index'); ?>" type="button" class="close" aria-hidden="true"
                >&times;</a>
        <span class="heading">中国华为科技有限公司</span>
        <?php
    // session_start(); 
    // echo "<br/>";
        // error_reporting(0);
        //通过 error 值，确定提示信息
        if(!empty($_GET['error'])){
        $error=$_GET['error'];
        if($error==1){
        echo "<span class='text-danger h5'>您输入的账号或密码错误</span>" ;
        }else if ($error==2){
        echo "<font color='red'>您输入的账号或密码正确！正在加载</font>";
        } else if ($error==3){
        echo "<span class='text-danger h5'>验证码错误</span>" ;
        } else if ($error==4){
        echo "<font color='red'>验证码正确！正在加载</font>";
        }

        }

        ?>

        <div class="form-group input-group ">

            <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" name="name" id="name" placeholder="用户名">
            <i class="fa fa-user"></i>

        </div>

        <div class="form-group input-group help">
   <span class="input-group-addon">
     <span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" name="password" id="password" placeholder="密 码">
            <i class="fa fa-lock"></i>
            <a href="#" class="fa fa-question-circle"></a>
        </div>
        <div class="form-group input-group">
     <span class="input-group-addon">
       <span class=" iconfont icon-yzm"></span></span>
            <input class="form-control" type="text" id="code" name="code" placeholder="验证码">
            <img style="z-index:99999;position:absolute; right:6%; top:5%;" class="pull-right" name="code"
                 src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src=this.src+'?'+Math.random()"><br>
        </div>
        <div class="form-group">
            <div class="main-checkbox">
                <input type="checkbox" value="None" id="checkbox1" name="check"/>
                <label for="checkbox1"></label>
            </div>
            <span class="text">记住密码</span>

            <button type="submit" name="submit" class="btn btn-default">登录</button>

            <a href="<?php echo url('index/index/index'); ?>" class="btn btn-warning btn-xs">退出</a>
        </div>

        <p class="p">版权所有©2016 华为科技有限公司 <a href="http://www.miitbeian.gov.cn/"> 粤A2-20044005号</a></p>
    </form>


</div>

<!-- <script type="text/javascript" src="__JS__/three.min.js"></script> -->

<script type="text/javascript" src="__JS__/login.js"></script>

</body>
</html>