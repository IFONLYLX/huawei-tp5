<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\phpstudy\WWW\tp5\public/../app/admin\view\index\frame\pages\admin_add.html";i:1510838601;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>admin添加</title>
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
</head>
<body ng-app="myApp" ng-controller="signUpController">
    <div class="login-set wrapper">


        <form style=" opacity: 0.8;" id="valiForm" class="form-horizontal" action="<?php echo url('admin/admin_add'); ?>" method="post"
        name="form" ng-submit="submitForm()">
        <img class="img-responsive center-block" src="__PUBLIC__/logo.png">
        <a href="<?php echo url('index/index/index'); ?>" type="button" class="close" aria-hidden="true"
        >&times;</a>
        <span class="heading">中国华为科技有限公司</span>


        <div class="form-group input-group ">

            <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" name="name" id="name" placeholder="用户名"
            ng-model="userdata.name" ng-minlength="4" ng-maxlength="28" required>

            <p class="fa fa-check input_result text-success" ng-if="form.name.$valid"></p>

            <p class="text-danger" ng-if="form.name.$error.required && form.name.$touched">用户名不可为空</p>

            <p class="text-danger"
            ng-if="(form.name.$error.minlength || form.name.$error.maxlength) && form.name.$touched">
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
           <div class="form-group">

            <button type="submit" name="submit" class="btn btn-default">注册</button>

        </div>
        <p class="p">版权所有©2016 华为科技有限公司 <a href="http://www.miitbeian.gov.cn/"> 粤A2-20044005号</a></p>
    </form>


</div>


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
<script type="text/javascript">
angular.module('myApp', [])
.controller('signUpController', function ($scope) {
    $scope.userdata = {};
    $scope.submitForm = function () {
        console.log($scope.userdata);
        if ($scope.form.$invalid) alert("请检查输入的信息");
        else alert("提交成功")
    };
})
.directive('compare', function () {
    var o = {};
    o.strict = "AE";
    o.scope = {orgText: "=compare"}
    o.require = "ngModel";
    o.link = function (sco, ele, att, con) {
        con.$validators.compare = function (v) {
            return v == sco.orgText;
        }
        sco.$watch("orgText", function () {
            con.$validate();
        });
    }
    return o;
})
</script>
<script type="text/javascript" src="__JS__/login.js"></script>
</body>
</html>