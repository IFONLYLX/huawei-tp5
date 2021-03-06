<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\phpstudy\WWW\tp5\public/../app/index\view\login\login.html";i:1510838014;}*/ ?>
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
        <form style=" opacity: 0.8;" class="form-horizontal" action="<?php echo url('user/checklogin'); ?>" method="post" name="form"
        onSubmit="return InputCheck(this)">
        <img class="img-responsive center-block" src="__PUBLIC__/logo.png">
        <a href="<?php echo url('index/index/index'); ?>" type="button" class="close" aria-hidden="true"
        >&times;</a>
        <span class="heading">中国华为科技有限公司</span>

        <div class="form-group input-group ">

            <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" name="username" id="username" placeholder="用户名">
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
             <img style=" z-index:99999;position:absolute; right:10%; top:10%;" class="pull-right" name="code"
             src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src=this.src+'?'+Math.random()"><br>
         </div>
         <div class="form-group">
            <div class="main-checkbox">
                <input type="checkbox" value="None" id="checkbox1" name="check"/>
                <label for="checkbox1"></label>
            </div>
            <span class="text">记住密码</span>
            <button type="submit" name="submit" class="btn btn-default">登录</button>
            <a href="index.html" class="btn btn-warning btn-xs">退出</a>
        </div>
        <p class="p">版权所有©2016 华为科技有限公司 <a href="http://www.miitbeian.gov.cn/"> 粤A2-20044005号</a></p>

        <p class="p">还没<span class="text-danger">注册</span>? 马上去<a href="<?php echo url('index/register'); ?>"> 注册</a></p>
    </form>
</div>
<script src="__JS__/all/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="__JS__/all/three.min.js"></script>
<script type="text/javascript" src="__JS__/login.js"></script>
</body>
</html>