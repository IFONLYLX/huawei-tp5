<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\phpstudy\WWW\tp5\public/../app/index\view\login\register.html";i:1511102108;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <title>注册界面</title>
  <link rel="shortcut icon" href="__PUBLIC__/favicon.ico">
  <!--自定义图标-->
  <link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.min.css">
  <!--引入bootstrap css样式-->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="__CSS__/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="__CSS__/login.css">
    <link rel="stylesheet" type="text/css" href="__CSS__/drag.css">
    <style>

    .wrapper .input_result {
      position: absolute;
      z-index: 99999;
      top: 5px;
      left: 90%;
    }

    .wrapper .text-danger {
      position: absolute;
      z-index: 99999;
      top: 5px;
      left: 60%;
    }

    </style>

    <script type="text/javascript">
    function sex() {
      var sex = document.getElementById("gender").value;
      if (sex != "1" && sex != "2") {

        alert("请正确填写错误,男 /女");
      }

    }
    function che() {
      if ($('#checkbox').is(':checked')) {

      } else {
        alert("请阅读并接受协议");

      }
    }

    </script>

  </head>
  <body ng-app="myApp" ng-controller="signUpController">
    <div class="login-set wrapper" style="top:-16%">
      <form style=" opacity: 0.8;" id="valiForm" class="form-horizontal" action="<?php echo url('user/register'); ?>" method="post"
      name="form" ng-submit="submitForm()">
      <img class="img-responsive center-block" src="__PUBLIC__/logo.png">
      <a href="<?php echo url('index/index/index'); ?>" type="button" class="close" aria-hidden="true"
      >&times;</a>
      <span class="heading">中国华为科技有限公司</span>
      <div class="form-group input-group ">

        <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
        <input type="text" class="form-control username" name="username" id="username" placeholder="用户名"
        ng-model="userdata.username" ng-minlength="4" ng-maxlength="28" required>

        <p class="fa fa-check input_result text-success" ng-if="form.username.$valid"></p>

        <p class="text-danger" ng-if="form.username.$error.required && form.username.$touched">用户名不可为空</p>

        <p class="text-danger"
        ng-if="(form.username.$error.minlength || form.username.$error.maxlength) && form.username.$touched">
        用户名长度应在4-32位之间</p>
      </div>
      <div class="form-group input-group help">
       <span class="input-group-addon">
         <span class="glyphicon glyphicon-lock"></span></span>
         <input type="password" class="form-control" name="password" id="password" placeholder="密　码"
         ng-model="userdata.password" ng-minlength="6" ng-maxlength="28" required>

         <p class="fa fa-check input_result text-success" ng-if="form.password.$valid"></p>

         <p class="text-danger" ng-if="form.password.$error.required && form.password.$touched">密码不可为空</p>

         <p class="text-danger"
         ng-if="(form.password.$error.minlength || form.password.$error.maxlength) && form.password.$touched">
         密码应在6-28位之间</p>
         <a href="#" class="fa fa-question-circle"></a>
       </div>
       <div class="form-group input-group help">
         <span class="input-group-addon">
           <span class="glyphicon glyphicon-lock"></span></span>
           <input type="password" class="form-control" name="confirm" id="password" placeholder="确认密码"
           ng-model="userdata.confirm" compare="userdata.password" required>

           <p class="fa fa-check input_result text-success" ng-if="form.confirm.$valid"></p>

           <p class="text-danger" ng-if="form.confirm.$error.compare && form.confirm.$touched">两次密码输入不一致</p>
           <a href="#" class="fa fa-question-circle"></a>
         </div>
         <div class="form-group input-group help">
          <span class="input-group-addon"> <span
            class="glyphicon glyphicon-envelope"></span></span> <input type="email"
            class="form-control" name="email"
            id="email" placeholder="Email"
            ng-model="userdata.email"> 
            <p class="fa fa-check input_result text-success"  ng-show="form.email.$dirty && form.email.$valid"></p>

            <p ng-show="form.email.$invalid && !form.email.$pristine"
            class="text-danger">请输入有效邮箱</p>

          </div>

          <div class="form-group input-group help">
            <!-- <span class="input-group-addon"> <span
            class="glyphicon glyphicon-envelope"></span></span> -->
            <label>
              <input type="radio" name="sex" id="optionsRadios1" value="1" checked>男
            </label>
            <label>
              <input type="radio" name="sex" id="optionsRadios2" value="2">女
            </label>
           <!--  <form type="hidden" class="form-horizontal sms-form" method="post" action="<?php echo url('index/index/sms'); ?>">
           
               <label class="col-sm-2 control-label">手机号</label>
               
               <input type="text" class="form-control" name="mobile" value="">
               <button type="submit" class="btn btn-success">发送短信</button>
               
               
           
             </form> -->
           </div>
           <!-- 滑动验证 -->
          <!--  <div class="form-group input-group help">
             <div id="drag"></div>
           </div> -->
           <div class="form-group">

            <button type="submit" name="submit" class="btn btn-default">注册</button>

          </div>
          <p class="p">版权所有©2016 华为科技有限公司 <a href="http://www.miitbeian.gov.cn/"> 粤A2-20044005号</a></p>

          <p class="p">已有<span class="text-danger">账号</span>? 马上去<a href="<?php echo url('index/login'); ?>"> 登录</a></p>
        </form>

      </div>
      <script src="__JS__/all/jquery-1.7.2.min.js"></script>
      <!-- 短信验证 -->
      <script>
      $(function(){
        $('.sms-form').submit(function(){
          var $this = $(this);
          if(!$this.hasClass('lock-form')){
                $this.addClass('lock-form');//锁定表单
                var formData = new FormData($this[0]);
                $.ajax({
                  url:$this.attr("action"),
                  type:'POST',
                  data:formData,
                  dataType:'json',
                  cache: false,
                  contentType: false,
                  processData: false,
                  success:function(s){
                        $this.removeClass('lock-form');//解锁表单
                        var html = (s.code != 1 ? '错误代码：' : '')+s.msg;
                        $('.panel-footer').html(html);
                        return false;
                      }
                    });
              }
              return false;
            });
      });
      </script>

      <script>
      function key() {
        if (event.keyCode == 13) {

          event.returnValue = false;
          event.cancle = true;
          loginform.submit.click();

        }

      }
      </script>

      <script src="__JS__/all/angular.min.js"></script>
      <script src="__JS__/index.js"></script>
      <script type="text/javascript" src="__JS__/all/three.min.js"></script>
      <script type="text/javascript" src="__JS__/login.js"></script>
      <!-- 滑动验证 -->
      <script type="text/javascript" src="__JS__/drag.js"></script>
      <script type="text/javascript">
      $('#drag').drag();
      </script>


      <script src="__JS__/jquery-1.11.3.min.js"></script>
      <script>

      $(document).ready(function(){
        $(".username").keyup(function(){
          $.ajax({
            type:"post",
            url:"user/checkselect",
            data:"username",
            success:function(data){
              $("#d4").html(data);
            }

          });
        });
      });
      </script>
    </body>
    </html>