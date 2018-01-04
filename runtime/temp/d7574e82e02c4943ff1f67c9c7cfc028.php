<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\phpstudy\WWW\tp5\public/../app/index\view\index\userinfo.html";i:1510886087;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" name="toTop" content="true">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--定义设备-->
    <!--自跳转页面-->
    <title>公司介绍-关于华为</title>
    <link rel="shortcut icon" href="__PUBLIC__/favicon.ico">
    <!--自定义图标-->
    <link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.min.css">
    <!--引入bootstrap css样式-->
    <link rel="stylesheet" type="text/css" href="__CSS__/index.css">
    <!--自定义css样式-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="body">

    <div id="right-icon" class="hidden-xs">
        <ul class="list-unstyled">
            <li>
                <div id="toTop"><a href="##">返回顶层</a></div>
            </li>
            <li>
                <div><a href="##">在线反馈</a></div>
            </li>
            <li>
                <div><a href="##">邮件给我</a></div>
            </li>
            <li>
                <div><a href="##">电话联系</a></div>
            </li>

        </ul>
    </div>
    <!--导航-->
    <div class="navbar-fixed-top">
  <input type="hidden" value="<?php echo $value=session('username'); ?>">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="pull-right">
                    <div id="nav-main" class="nav-main-top">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <?php echo lang('选择语言/区域'); ?>
                          </button>
                          <ul class="dropdown-menu" style="min-width:120px;padding:0px;">
                            <li> <button style="width:100%" type="button" lang="en" class="btn btn-primary btn-sm" id="btn"><?php echo lang('英文'); ?></button></li>
                            <li><button style="width:100%" type="button" lang="cn" class="btn btn-info btn-sm" id="btns"><?php echo lang('中文'); ?></button>  
                            </li>

                        </ul>
                    </div>
                    <span><a href="<?php echo url('../admin/admin/login'); ?>" target="_parent"><?php echo lang('后台'); ?></a></span>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background:grey">
            <div class="navbar-header">
                <button class="navbar-toggle hamburger" id="hamburger" data-toggle="collapse"
                data-target="#responsenav">

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a href="<?php echo url('index/index'); ?>" target="_parent" class="navbar-brand"><img src="__img__/华为logo.png"
              class="img-responsive"></a>
          </div>

      </div>
  </nav>

</div>

<div class="container" style="margin-top:100px;">
    <ul class="list-unstyled list-inline">
        <li><a href="<?php echo url('index/index'); ?>" target="_parent" class="text-info">首页</a></li>
        <span class="glyphicon glyphicon-menu-right"></span>
        <li>用户管理</li>
    </ul>
</div>
<div class="container" style="height:400px;">

    <div class="col-sm-12">

     <table  class="table table-striped table-bordered table-responsive">
       <thead>
           <th>

            <td>用户名</td>
            <td>密码</td>
            <td>Email</td>
            <td>性别</td>
            <td>注册时间</td>
            <td>注册IP</td>
            <td>操作</td>
        </th>
    </thead>


    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['sex']; ?></td>
        <td><?php echo $data['create_time']; ?></td>
        <td><?php echo $data['ip']; ?></td>
        <td><a class="btn btn-danger btn-xs" href="userinfo_update?id=<?php echo $data['id']; ?>" target="_parent">修改</a></td>
    </tr> 

</table>

</div>

</div>
<!--底部导航-->
<div class="modal-footer">
    <div class="container">
        <div class="col-md-8 col-sm-12 hidden-xs">
            <div class="col-md-3  col-sm-3">
                <label><?php echo lang('按访问者'); ?> </label>
                <ul class="list-unstyled xs-nav ">
                    <li><a href="<?php echo url('index/user'); ?>" target="_parent"><?php echo lang('个人用户'); ?></a></li>
                    <li><a href="#"><?php echo lang('企业用户'); ?></a></li>
                    <li><a href="#"><?php echo lang('运营商用户'); ?></a></li>
                    <li><a href="#"><?php echo lang('合作伙伴'); ?></a></li>
                    <li><a href="#"><?php echo lang('新闻媒体'); ?></a></li>
                    <li><a href="#"><?php echo lang('开发者'); ?></a></li>
                    <li><a href="#"><?php echo lang('供应商'); ?></a></li>
                    <li><a href="#"><?php echo lang('求职者'); ?></a></li>
                </ul>
            </div>
            <div class="  col-md-3   col-sm-3">
                <label><?php echo lang('关于华为'); ?></label>
                <ul class="list-unstyled  xs-nav">
                    <li><a href="<?php echo url('index/introduction'); ?>" target="_parent"><?php echo lang('公司简介'); ?></a></li>
                    <li><a href="<?php echo url('index/manage'); ?>" target="_parent"><?php echo lang('公司治理'); ?></a></li>
                    <li><a href="#"><?php echo lang('高管信息'); ?></a></li>
                    <li><a href="#"><?php echo lang('债券投资者关系'); ?></a></li>
                    <li><a href="#"><?php echo lang('可持续发展'); ?></a></li>
                    <li><a href="##"><?php echo lang('网络安全'); ?></a></li>
                    <li><a href="#"><?php echo lang('出版物'); ?></a></li>
                    <li><a href="#"><?php echo lang('公司年报'); ?></a></li>

                </ul>


            </div>
            <div class="  col-md-3   col-sm-3 ">
                <label><?php echo lang('新闻 & 展会'); ?></label>
                <ul class="list-unstyled  xs-nav">

                    <li><a href="<?php echo url('index/news'); ?>" target="_parent"><?php echo lang('新闻'); ?></a></li>
                    <li><a href="#"><?php echo lang('安全通告'); ?></a></li>
                    <li><a href="#"><?php echo lang('展会活动'); ?></a></li>



                    <li class="changye"><a href="#"><?php echo lang('行业洞察'); ?></a></li>
                    <li><a href="#"><?php echo lang('全联接世界'); ?></a></li>
                    <li><a href="#"><?php echo lang('全球联接指数'); ?></a></li>
                </ul>


            </div>
            <div class=" col-md-3   col-sm-3 ">
                <label> <?php echo lang('快速链接'); ?></label>
                <ul class="list-unstyled  xs-nav">
                    <li><a href="<?php echo url('index/mall'); ?>" target="_parent"><?php echo lang('华为商城'); ?></a></li>
                    <li><a href="#"><?php echo lang('荣耀官网'); ?></a></li>
                    <li><a href="#"><?php echo lang('华为海洋'); ?></a></li>
                    <li><a href="#"><?php echo lang('产品定义社区'); ?></a></li>
                    <li><a href="#"><?php echo lang('心声社区'); ?></a></li>
                    <li><a href="#"><?php echo lang('除名查询'); ?></a></li>
                    <li><a href="#"><?php echo lang('在线反馈'); ?></a></li>
                </ul>


            </div>
        </div>

        <div class="col-md-4">
            <div class="imglinks pull-left">
                <ul class="list-unstyled">
                    <li><?php echo lang('关注我们'); ?></li>
                    <div>
                        <a href="##"><img src="__img__/footer/sina.png" style="width:35px;"></a>
                        <a href="##"><img src="__img__/footer/linkedin.png"></a>
                        <a href="##"><img src="__img__/footer/wechat.jpg"></a>
                        <li><?php echo lang('官方微信'); ?></li>
                    </div>
                </ul>
            </div>
        </div>


        <div class="col-xs-12 visible-xs">
            <div class="col-sm-3 navbar">
                <label class="navbar-toggle pull-left" data-toggle="collapse" data-target="#f">
                    <?php echo lang('按访问者'); ?><span class="caret"></span>

                </label>

                <div class="collapse navbar-collapse col-xs-12" id="f">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo url('index/user'); ?>" target="_parent"><?php echo lang('个人用户'); ?></a></li>
                        <li><a href="#"><?php echo lang('企业用户'); ?></a></li>
                        <li><a href="#"><?php echo lang('运营商用户'); ?></a></li>
                        <li><a href="#"><?php echo lang('合作伙伴'); ?></a></li>
                        <li><a href="#"><?php echo lang('新闻媒体'); ?></a></li>
                        <li><a href="#"><?php echo lang('开发者'); ?></a></li>
                        <li><a href="#"><?php echo lang('供应商'); ?></a></li>
                        <li><a href="#"><?php echo lang('求职者'); ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 navbar">
                <label class="navbar-toggle pull-left" data-toggle="collapse" data-target="#d">
                    <?php echo lang('关于华为'); ?><span class="caret"></span>

                </label>

                <div class="collapse navbar-collapse  col-xs-12" id="d">
                    <ul class=" nav navbar-nav ">
                        <li><a href="<?php echo url('index/introduction'); ?>" target="_parent"><?php echo lang('公司简介'); ?></a></li>
                        <li><a href="<?php echo url('index/manage'); ?>" target="_parent"><?php echo lang('公司治理'); ?></a></li>
                        <li><a href="#"><?php echo lang('高管信息'); ?></a></li>
                        <li><a href="#"><?php echo lang('债券投资者关系'); ?></a></li>
                        <li><a href="#"><?php echo lang('可持续发展'); ?></a></li>
                        <li><a href="##"><?php echo lang('网络安全'); ?></a></li>
                        <li><a href="#"><?php echo lang('出版物'); ?></a></li>
                        <li><a href="#"><?php echo lang('公司年报'); ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 navbar">
                <label class="navbar-toggle pull-left" data-toggle="collapse" data-target="#g">
                    <?php echo lang('新闻 &amp; 展会'); ?><span class="caret"></span>

                </label>

                <div class="collapse navbar-collapse  col-xs-12" id="g">
                    <ul class=" nav navbar-nav ">
                        <li><a href="<?php echo url('index/news'); ?>" target="_parent"><?php echo lang('新闻'); ?></a></li>
                        <li><a href="#"><?php echo lang('安全通告'); ?></a></li>
                        <li><a href="#"><?php echo lang('展会活动'); ?></a></li>


                    </ul>
                </div>
            </div>
            <div class="col-sm-3 navbar">
                <label class="navbar-toggle pull-left" data-toggle="collapse" data-target="#s">
                    <?php echo lang('行业洞察'); ?><span class="caret"></span>

                </label>

                <div class="collapse navbar-collapse  col-xs-12" id="s">
                    <ul class=" nav navbar-nav ">
                        <li><a href="#"><?php echo lang('全联接世界'); ?></a></li>
                        <li><a href="#"><?php echo lang('全球联接指数'); ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 navbar">
                <label class="navbar-toggle pull-left" data-toggle="collapse" data-target="#a">
                    <?php echo lang('快速链接'); ?><span class="caret"></span>

                </label>

                <div class="collapse navbar-collapse  col-xs-12" id="a">
                    <ul class=" nav navbar-nav ">
                        <li><a href="<?php echo url('index/mall'); ?>" target="_parent"><?php echo lang('华为商城'); ?></a></li>
                        <li><a href="#"><?php echo lang('荣耀官网'); ?></a></li>
                        <li><a href="#"><?php echo lang('华为海洋'); ?></a></li>
                        <li><a href="#"><?php echo lang('产品定义社区'); ?></a></li>
                        <li><a href="#"><?php echo lang('心声社区'); ?></a></li>
                        <li><a href="#"><?php echo lang('除名查询'); ?></a></li>
                        <li><a href="#"><?php echo lang('在线反馈'); ?></a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
    <div class="container-fluid" style="border-top:1px solid #aaaaaa;">
        <div class="container">
            <div class="text-right">
                <p class="footer-new text-left pull-left"><?php echo lang('©2017 华为科技有限公司'); ?> <a href="http://www.miitbeian.gov.cn/">
                 <?php echo lang('粤A2-20044005号'); ?> </a></p>

                 <span><a href="#"><?php echo lang('法律声明'); ?></a></span>
                 <span><a href="#"><?php echo lang('隐私保护'); ?></a></span>
                 <span><a href="#"><?php echo lang('联系我们'); ?></a></span>

             </div>
         </div>
     </div>
 </div>
 <script src="__JS__/all/jquery-1.11.3.min.js"></script>
 <!--1429行有改动-->
 <script src="__JS__/all/jquery.mobile-1.4.5.min.js"></script>
 <script>
 $(document).on("pagecreate","#body",function(){
   $("body").on("swipeleft",function(){
      alert("确定跳转......");
      window.location.href="<?php echo url('../admin/admin/login'); ?>"; 
  });
});

 </script>
 <script src="__JS__/all/bootstrap.min.js"></script>
 <script src="__JS__/main.js"></script>
 <script type="text/javascript">
 $(document).ready(function () {
    $(".hamburger").click(function () {
        $(this).toggleClass("is-active");
    });
});
 </script>
 <script>
 $('#btn').click(function(){
    var data={'lang':$(this).attr('lang')}
    $.get("<?php echo url('index/lang'); ?>",data,function(){
        location.reload();
    })

});
 $('#btns').click(function(){
    var data={'lang':$(this).attr('lang')}
    $.get("<?php echo url('index/lang'); ?>",data,function(){
        location.reload();
    })

})
 </script>
</body>
</html>
