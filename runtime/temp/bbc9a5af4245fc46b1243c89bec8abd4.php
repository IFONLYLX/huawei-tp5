<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"D:\phpstudy\WWW\tp5\public/../app/index\view\index\malldetall.html";i:1511278965;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8" name="toTop" content="true">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="__PUBLIC__/favicon.ico">
    <!--自定义图标-->
    <title>华为商城官网</title>
    <link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="__CSS__/mall.css"/>
    <link type="text/css" rel="stylesheet" href="__CSS__/malls.css"/>
</head>
<body ng-app="dsh" ng-controller="ctrl">
   <div id="navbar-top"  class="container navbar-top">
      <input type="hidden" value="<?php echo $value=session('username'); ?>">
      <div class="col-sm-12">
        <ul class="list-unstyled list-inline pull-left">
            <li><a href="##">华为官网</a></li>
            <li><a href="##">荣耀官网</a></li>
            <li><a href="##">花粉俱乐部</a></li>
            <li><a href="##">帮助中心</a></li>
            <li><a href="##">V码(优购码)</a></li>
            <li><a href="##">Select Region</a></li>
            <li><a href="##">更多精彩</a></li>

        </ul>
        <ul class="list-unstyled list-inline pull-right">
         <?php
         if ($value==null) {
            echo '<li><a href="/tp5/public/index/index/login" target="_parent">登录</a>-';
            echo '<a href="/tp5/public/index/index/register" target="_parent">注册</a></li>';
        }else{

            echo "<li><a href='userinfo?username=$value'  target='_parent'>个人信息</a>-";
            echo '<a href="/tp5/public/index/user/logout.html" target="_parent">注销</a></li>';
        }
        ?>
        <li><a href="##">我的订单</a></li>
        <li><a href="##">购物车</a></li>

    </ul>
</div>
</div>
<div id="navbar" class="container navbar">
    <div class="col-sm-12">
        <ul class="list-unstyled list-inline pull-left">
            <li> <a href="##"><img src="__img__/mall/nav/logo.png" class="img-responsive"></a></li>
            <li><a href="##">华为专区</a></li>
            <li><a href="##">荣耀专区</a></li>
            <li><a href="##">HUAWEI Mate10</a></li>
            <li><a href="##">荣耀V9</a></li>
            <li><a href="##">华为双11</a></li>
        </ul>
        <a href="##"  class="pull-right">  
            <div class="input-group form-group">
                <input type="text" class="form-control" placeholder="搜索..."/>
                <span class="input-group-addon">
                    <span class=" glyphicon glyphicon-search">
                    </span>
                </span>
            </div>
        </a>
    </div>
</div>
<div class="col-sm-12" style="padding: 0px;">
   <div class="container malldetall-title">
    <a href="##">首页></a>
    <a href="##">手机></a>
    <a href="##">荣耀></a>
    <a href="##"><?php echo $data['title']; ?>></a>
</div> 
<input type="hidden" value="<?php echo $data['id']; ?>">
<div class="col-sm-4 text-center">
    <img src="__upload__/<?php echo $data['picurl']; ?>" class="img-responsive">
</div>
<div class="col-sm-8 malldetall-goods">
    <div class="input-group">
        <h3>
           <?php echo $data['title']; ?>
       </h3>
   </div>
   <div class="input-group malldetall-price">
       <p>
        <span>抢购价</span>
        <span><?php echo $data['description']; ?></span>
        <span>限时特价</span>
        <span>支持分期</span>
        <span>赠送积分</span> 
    </p> 
</div>
<div class="input-group">
   <h3>
      <?php echo $data['content']; ?>
  </h3>
</div>
<style>


</style>
<div class="input-group malldetall-price">
    <p class="pull-left">选择颜色：</p> 
    <ul class="list-inline pull-left">
        <li class="active"> <img src="__upload__/<?php echo $data['picurl']; ?>" width="20px;"height="20px">玫瑰金
        </li>
        <li> <img src="__upload__/<?php echo $data['picurl']; ?>" width="20px;"height="20px">
            金色
        </li>
        <li> <img src="__upload__/<?php echo $data['picurl']; ?>" width="20px;"height="20px">
            黑色
        </li>
    </ul>

</div>
<div class="input-group malldetall-price">
   <p class="pull-left">选择制式：</p> 
   <ul class="list-inline pull-left">
    <li class="active">
        全网通标配版
    </li>
    <li>
        全网通高配版
    </li>
</ul>
</div>
<div class="input-group malldetall-price">
  <p class="pull-left">选择容量：</p> 
  <ul class="list-inline pull-left">
    <li class="active">3GB+32GB
    </li>

</ul>
</div>
<div class="input-group malldetall-price">
  <p class="pull-left">选择套餐：</p> 
  <ul class="list-inline pull-left">
    <li class="active">官方标配
    </li>
</ul>
</div>
<div class="input-group malldetall-price">
    <p class="pull-left">保障服务：</p> 
    <ul class="list-inline pull-left">
        <li class="active">碎屏保险</li>

    </ul>
</div>
<div class="input-group malldetall-price">
  <p class="pull-left">已选商品：<span><?php echo $data['title']; ?></span></p>  
</div>
<div class="input-group malldetall-price">
  <p class="pull-left">总价：<span>￥{{goods.num * 1099}}</span></p>  
</div>
<div class="col-sm-3 pull-left input-group malldetall-num">

  <span class="pull-left" >{{goods.num}}</span>
  <span class="pull-right" ng-click="add()">+</span>
  <span class="pull-right" ng-click="ed()">-</span>
</div>

<div class="col-sm-6">
    <a href="##" class="btn btn-warning btn-lg pull-left">加入购物车</a>
    <a href="##" class="btn btn-danger btn-lg  pull-right">立即下单</a>
</div>
    
</div>
</div>

<div class="container-fluid"  >
    <div class="text-center col-sm-12" style="margin-top:80px;"><h4>推荐商品</h4></div>
    <div class="col-sm-3"><a href="##"><img src="__img__/mall/main1/1.png" class="img-responsive"></a></div>
    <div class="col-sm-3"><a href="##"><img src="__img__/mall/main1/2.png" class="img-responsive"></a></div>
    <div class="col-sm-3"><a href="##"><img src="__img__/mall/main1/3.png" class="img-responsive"></a></div>
    <div class="col-sm-3"><a href="##"><img src="__img__/mall/main1/4.png" class="img-responsive"></a></div>
</div>
<div class="container mall-detall-malls text-center">
    <ul class="list-unstyled list-inline">
        <li class="active">
            <a href="##" >商品详情</a>
        </li>
        <li>
            <a href="##">规格参数</a>
        </li>
        <li>
            <a href="##">包装与售后</a>
        </li>
        <li>
            <a href="##">用户评价</a>
        </li>
    </ul>
    <img src="__img__/mall/malldetall1.jpg" class="img-responsive">
</div>
<div class="container-fluid" style="padding:0px;margin:0px;">
    <img src="__img__/mall/malldetall.jpg" class="img-responsive">
    <img src="__img__/mall/malldetall2.jpg" class="img-responsive">
</div>
<div class="col-sm-pull-3 container-fluid mall-footer text-center"  style="padding:30px 0px;">
    <div class="col-sm-3"><a href=""><i></i>百强企业 品质保证</a></div>
    <div class="col-sm-3"><a href=""><i></i>7天退货  15天换货</a></div>

    <div class="col-sm-3"><a href=""><i></i>48元起免运费</a></div>

    <div class="col-sm-3"><a href=""><i></i>448家维修网点 全国联保</a></div>


</div>
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
                <p class="footer-new text-left pull-left"><?php echo lang('©2017 华为科技有限公司'); ?> 
                    <a href="http://www.miitbeian.gov.cn/">
                        <?php echo lang('粤A2-20044005号'); ?> </a></p>
                        <span><a href="#"><?php echo lang('法律声明'); ?></a></span>
                        <span><a href="#"><?php echo lang('隐私保护'); ?></a></span>
                        <span><a href="#"><?php echo lang('联系我们'); ?></a></span>

                    </div>
                </div>
            </div>
        </div>
        <script src="__JS__/all/jquery-1.7.2.min.js"></script>
        <script src="__JS__/all/angular.min.js"></script>
        <script type="text/javascript">
        angular.module('dsh', [])
        .controller('ctrl', function ($scope) {
            $scope.goods = {
                price : '<?php echo $data['description']; ?>',
                description : '<?php echo $data['content']; ?>',
                num : 0,
            };
            $scope.add = function(id) {

                $scope.goods.num = Math.min(++$scope.goods.num, 10);
            }
            $scope.ed = function(id) {
                $scope.goods.num = Math.max(--$scope.goods.num, 0);
            }
        })

        </script>

        <script src="__JS__/all/jquery-1.11.3.min.js"></script>
    </body>
    </html>
