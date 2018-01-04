<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\phpstudy\WWW\tp5\public/../app/index\view\index\mall.html";i:1511104151;}*/ ?>
<!DOCTYPE HTML>
<html>
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
<body id="body">
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
            <?php echo $value=session('username'); 
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
                    </span></span>
                </div></a>
            </div>
        </div>

        <!--首页滚动图片-->

        <div id="theCarousel" class="carousel slide mall-slide-col" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#theCarousel" data-slide-to="1"></li>
                <li data-target="#theCarousel" data-slide-to="2"></li>
                <li data-target="#theCarousel" data-slide-to="3"></li>
                <li data-target="#theCarousel" data-slide-to="4"></li>
                <li data-target="#theCarousel" data-slide-to="5"></li>
                <li data-target="#theCarousel" data-slide-to="6"></li>
                <li data-target="#theCarousel" data-slide-to="7"></li>
            </ol>


            <div class="carousel-inner mall-slide">
                <div class="item active">
                    <img src="__img__/mall/nav/1.jpg" class="img-responsive">
                </div>
                <div class="item">
                    <img src="__img__/mall/nav/2.jpg" class="img-responsive">
                </div>
                <div class="item">
                    <img src="__img__/mall/nav/3.jpg" class="img-responsive">
                </div>
                <div class="item">
                    <img src="__img__/mall/nav/4.jpg" class="img-responsive">
                </div>
                <div class="item">
                    <img src="__img__/mall/nav/5.jpg" class="img-responsive">
                </div>
                <div class="item">
                    <img src="__img__/mall/nav/6.jpg" class="img-responsive">
                </div>
                <div class="item">
                    <img src="__img__/mall/nav/7.jpg" class="img-responsive">
                </div>
                <div class="item">
                    <img src="__img__/mall/nav/8.png" class="img-responsive">
                </div>
            </div>
            <a class="left carousel-control" href="#theCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

            <a class="right carousel-control" href="#theCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <!--首页滚动图片-->

        <div class="container mall-main">
            <nav class="nav hidden-sm">
                <div class="mall-main-list">
                    <ul class="list-unstyled">
                        <li>
                            <div class="mall-left-list">
                                <h3>手机</h3>
                                <span>荣耀</span>
                                <span>HUAWEI 系列</span>
                            </div>
                            <div class="mall-right">
                                <div class="mall-right-list">
                                    <div class="col-sm-12">
                                        <h2>浏览手机频道</h2>
                                    </div>
                                    <div class="mall-right-list-title">
                                        <a href="##">荣耀</a>
                                        <a href="##">HAUWEI P系列</a>
                                        <a href="##">畅玩</a>
                                        <a href="##">HUAWEI Mate系列</a>
                                        <a href="##">HUAWEI nova系列</a>|
                                        <a href="##">HUAWEI 麦芒系列</a>
                                        <a href="##">华为畅想系列</a>
                                        <a href="##">合约机</a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="##">
                                            <img src="__img__/mall/nav/11.jpg" class="img-responsive">
                                            <h3>HUAWEI nova2</h3>
                                            <span>￥2199</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="##">
                                            <img src="__img__/mall/nav/12.jpg" class="img-responsive">

                                            <h3>HUAWEI nova2</h3>


                                            <span>￥2199</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="##">
                                            <img src="__img__/mall/nav/13.jpg" class="img-responsive">

                                            <h3>HUAWEI nova2</h3>


                                            <span>￥2199</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="##">
                                            <img src="__img__/mall/nav/14.jpg" class="img-responsive">
                                            <h3>HUAWEI nova2</h3>                         
                                            <span>￥2199</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                         <div class="mall-left-list">
                            <h3>笔记本 & 平板</h3>
                            <span>平板电脑</span>
                            <span>笔记本电脑</span>
                        </div>
                        <div class="mall-right" style="top:-70px;">
                            <div class="mall-right-list">
                                <div class="col-sm-12">
                                    <h2>浏览手机频道</h2>
                                </div>
                                <div class="mall-right-list-title">
                                    <a href="##">荣耀</a>
                                    <a href="##">HAUWEI P系列</a>
                                    <a href="##">畅玩</a>
                                    <a href="##">HUAWEI Mate系列</a>
                                    <a href="##">HUAWEI nova系列</a>|
                                    <a href="##">HUAWEI 麦芒系列</a>
                                    <a href="##">华为畅想系列</a>
                                    <a href="##">合约机</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="##">
                                        <img src="__img__/mall/nav/15.jpg" class="img-responsive">

                                        <h3>HUAWEI nova2</h3>


                                        <span>￥2199</span>
                                    </a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="##">
                                        <img src="__img__/mall/nav/16.jpg" class="img-responsive">

                                        <h3>HUAWEI nova2</h3>


                                        <span>￥2199</span>
                                    </a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="##">
                                        <img src="__img__/mall/nav/17.jpg" class="img-responsive">

                                        <h3>HUAWEI nova2</h3>


                                        <span>￥2199</span>
                                    </a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="##">
                                        <img src="__img__/mall/nav/18.jpg" class="img-responsive">

                                        <h3>HUAWEI nova2</h3>


                                        <span>￥2199</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                      <div class="mall-left-list">
                          <h3>穿戴</h3>
                          <span>手环</span>
                          <span>手表</span>
                      </div>
                      <div class="mall-right" style="top:-140px;">
                        <div class="mall-right-list">
                            <div class="col-sm-12">
                                <h2>浏览手机频道</h2>
                            </div>
                            <div class="mall-right-list-title">

                                <a href="##">荣耀</a>
                                <a href="##">HAUWEI P系列</a>
                                <a href="##">畅玩</a>
                                <a href="##">HUAWEI Mate系列</a>
                                <a href="##">HUAWEI nova系列</a>|
                                <a href="##">HUAWEI 麦芒系列</a>
                                <a href="##">华为畅想系列</a>
                                <a href="##">合约机</a>
                            </div>
                            <div class="col-sm-3">
                                <a href="##">
                                    <img src="__img__/mall/nav/19.jpg" class="img-responsive">

                                    <h3>HUAWEI nova2</h3>


                                    <span>￥2199</span>
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <a href="##">
                                    <img src="__img__/mall/nav/20.jpg" class="img-responsive">

                                    <h3>HUAWEI nova2</h3>


                                    <span>￥2199</span>
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <a href="##">
                                    <img src="__img__/mall/nav/21.jpg" class="img-responsive">

                                    <h3>HUAWEI nova2</h3>


                                    <span>￥2199</span>
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <a href="##">
                                    <img src="__img__/mall/nav/22.jpg" class="img-responsive">

                                    <h3>HUAWEI nova2</h3>


                                    <span>￥2199</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                 <div class="mall-left-list">
                   <h3>智能家居</h3>
                   <span>子母路由</span>
                   <span>电视盒子</span>
                   <span>路由器</span>
               </div>
               <div class="mall-right" style="top:-210px;">
                <div class="mall-right-list">
                    <div class="col-sm-12">
                        <h2>浏览手机频道</h2>
                    </div>
                    <div class="mall-right-list-title">
                        <a href="##">荣耀</a>
                        <a href="##">HAUWEI P系列</a>
                        <a href="##">畅玩</a>
                        <a href="##">HUAWEI Mate系列</a>
                        <a href="##">HUAWEI nova系列</a>|
                        <a href="##">HUAWEI 麦芒系列</a>
                        <a href="##">华为畅想系列</a>
                        <a href="##">合约机</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="##">
                            <img src="__img__/mall/nav/23.jpg" class="img-responsive">
                            <h3>HUAWEI nova2</h3>
                            <span>￥2199</span>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="##">
                            <img src="__img__/mall/nav/24.jpg" class="img-responsive">
                            <h3>HUAWEI nova2</h3>
                            <span>￥2199</span>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="##">
                            <img src="__img__/mall/nav/25.jpg" class="img-responsive">

                            <h3>HUAWEI nova2</h3>


                            <span>￥2199</span>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="##">
                            <img src="__img__/mall/nav/26.jpg" class="img-responsive">

                            <h3>HUAWEI nova2</h3>


                            <span>￥2199</span>
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <li>
         <div class="mall-left-list">
          <h3>通用配件</h3>
          <span>移动电源</span>
          <span>耳机</span>
          <span>音箱</span>
      </div>
      <div class="mall-right" style="top:-280px;">
        <div class="mall-right-list">
            <div class="col-sm-12">
                <h2>浏览手机频道</h2>
            </div>
            <div class="mall-right-list-title">

                <a href="##">荣耀</a>
                <a href="##">HAUWEI P系列</a>
                <a href="##">畅玩</a>
                <a href="##">HUAWEI Mate系列</a>
                <a href="##">HUAWEI nova系列</a>|
                <a href="##">HUAWEI 麦芒系列</a>
                <a href="##">华为畅想系列</a>
                <a href="##">合约机</a>
            </div>
            <div class="col-sm-3">
                <a href="##">
                    <img src="__img__/mall/nav/27.jpg" class="img-responsive">

                    <h3>HUAWEI nova2</h3>


                    <span>￥2199</span>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="##">
                    <img src="__img__/mall/nav/28.jpg" class="img-responsive">

                    <h3>HUAWEI nova2</h3>


                    <span>￥2199</span>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="##">
                    <img src="__img__/mall/nav/29.jpg" class="img-responsive">

                    <h3>HUAWEI nova2</h3>


                    <span>￥2199</span>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="##">
                    <img src="__img__/mall/nav/30.jpg" class="img-responsive">

                    <h3>HUAWEI nova2</h3>


                    <span>￥2199</span>
                </a>
            </div>
        </div>
    </div>
</li>
<li>
   <div class="mall-left-list">
       <h3>专属配件</h3>
       <span>保护壳</span>
       <span>保护套</span>
       <span>贴膜</span>
   </div>
   <div class="mall-right" style="top:-350px;">
    <div class="mall-right-list">
        <div class="col-sm-12">
            <h2>浏览手机频道</h2>
        </div>
        <div class="mall-right-list-title" >

            <a href="##">荣耀</a>
            <a href="##">HAUWEI P系列</a>
            <a href="##">畅玩</a>
            <a href="##">HUAWEI Mate系列</a>
            <a href="##">HUAWEI nova系列</a>|
            <a href="##">HUAWEI 麦芒系列</a>
            <a href="##">华为畅想系列</a>
            <a href="##">合约机</a>
        </div>
        <div class="col-sm-3">
            <a href="##">
                <img src="__img__/mall/nav/31.jpg" class="img-responsive">

                <h3>HUAWEI nova2</h3>


                <span>￥2199</span>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="##">
                <img src="__img__/mall/nav/32.jpg" class="img-responsive">

                <h3>HUAWEI nova2</h3>


                <span>￥2199</span>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="##">
                <img src="__img__/mall/nav/33.jpg" class="img-responsive">

                <h3>HUAWEI nova2</h3>


                <span>￥2199</span>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="##">
                <img src="__img__/mall/nav/34.jpg" class="img-responsive">

                <h3>HUAWEI nova2</h3>


                <span>￥2199</span>
            </a>
        </div>
    </div>
</div>
</li>

</ul>
</div>
</nav>
<!-- 导航菜单 -->
<div id="mall-main-top"  class="container mall-main-top">
    <div class="col-sm-12">

        <ul class="list-unstyled list-inline pull-left" style="width:280px;margin-top:2px;">
            <?php
            if ($value==null) {
                echo '<li>';
            echo '<div class="col-sm-12 notlog">';//1
            echo '<div>
            <img style="width:59px;height:59px;" src="__img__/mall/nav/img_not_logged_in.png" class="img-responsive pull-left">
            </div>';
            echo '<div>';//2
            echo '<div>欢迎来到华为商城，请
            <a href="/tp5/public/index/index/login" class="text-black" target="_parent">登录</a>';
            echo '还没账号<a href="/tp5/public/index/index/register" class="text-black" target="_parent">注册</a>即可享受</div>';
            echo '<span><a href="##">新手福利</a></span>';
            echo '<span><a href="##">会员频道</a></span>';
            echo '</div>';//2
            echo '</div>';//1
            echo "</li>";
        }else{
               echo '<div class="col-sm-12 notlog">';//1
               echo '<div>
               <img style="width:59px;height:59px;" src="__img__/mall/nav/img_not_logged_in.png" class="img-responsive pull-left">
               </div>';
               echo "<li><a href='userinfo?username=$value'  target='_parent'>个人信息</a>-";
               echo '<a href="/tp5/public/index/user/logout.html" target="_parent">注销</a></li>';
               echo "用户名：<i>$value</i> ";
               echo '<br><span><a href="##">新手福利</a></span>';
               echo '<span><a href="##">会员频道</a></span>';
               echo '</div>';
           }
           ?>

       </ul>

       <ul class="list-unstyled list-inline mall-main-top-list">
        <li><a href="##">
            <div class="img"> 
                <img src="__img__/mall/nav/mall-top.png">
            </div>

            华为官网</a></li>
            <li><a href="##">
               <div class="img"> 
                <img src="__img__/mall/nav/mall-top.png">
            </div>
            荣耀官网</a></li>
            <li><a href="##"> 
             <div class="img"> 
                <img src="__img__/mall/nav/mall-top.png">
            </div>
            花粉俱乐部</a></li>
            <li><a href="##"> 
               <div class="img"> 
                <img src="__img__/mall/nav/mall-top.png">
            </div>
            帮助中心</a>
        </li>
        <li>
            <a href="##"> 
               <div class="img"> 
                <img src="__img__/mall/nav/mall-top.png">
            </div>
            pV码(优购码)
        </a>
    </li>
    <li><a href="##"> 
        <div class="img"> 
            <img src="__img__/mall/nav/mall-top.png">
        </div>
        Select Region</a>
    </li>
    <ul style="width:300px;border:1px solid  #eaeaea;" class="pull-right">
        <a href="##"> 
            <div calss=""> 
             <p class="text-red">公告</p>
         </div>
         <div>
            <ul class=" list-inline list-unstyled pull-left">
                <li>
                    <a href="##"> 
                        <div class="img1"> 
                            <img src="__img__/mall/nav/mall-top.png">
                        </div>
                        实名认证</a>

                    </li>
                    <li>
                        <a href="##"> 
                            <div class="img1"> 
                                <img src="__img__/mall/nav/mall-top.png">
                            </div>芝麻信用</a>
                        </li>
                        <li>
                         <a href="##"> 
                            <div class="img1"> 
                                <img src="__img__/mall/nav/mall-top.png">
                            </div>优购码</a>
                        </li>
                    </ul>
                </div> 
            </a> 
        </ul>
    </ul>

</div>
</div>
<!-- 导航菜单 -->

<div class="container-fluid mall-main1">

    <?php foreach($data as $value): ?>
    <div class="col-sm-3"> 
        <input type="hidden" value="<?php echo $value['id']; ?>">
        <a href="mall_detall?id=<?php echo $value['id']; ?>"  target="_parent">

            <img src="__upload__/<?php echo $value['picurl']; ?>" class="img-responsive">
        </a>
    </div>
    <?php endforeach; ?> 
   <!--  <div class="col-sm-3">
        <a href="##">
            <img src="__img__/mall/main1/1.png" class="img-responsive">
        </a>
    </div>
    <div class="col-sm-3">
        <a href="##">
            <img src="__img__/mall/main1/2.png" class="img-responsive">
        </a>
    </div>
    <div class="col-sm-3">
        <a href="##">
            <img src="__img__/mall/main1/3.png" class="img-responsive">
        </a>
    </div>
    <div class="col-sm-3">
        <a href="##">
            <img src="__img__/mall/main1/4.png" class="img-responsive">
        </a>
    </div> -->
</div>

<div class="container-fluid mall-main2">
    <h3>热销单品</h3>

    <div class="col-sm-3 mall-left">
        <a href="##">
            <img src="__img__/mall/main2/left.jpg" class="img-responsive">
        </a>
    </div>
    <div class="col-sm-9 mall-right text-center mall-img">
        <?php foreach($data1 as $value): ?>
        <div class="col-sm-3"> 
         <input type="hidden" value="<?php echo $value['id']; ?>">
         <a href="mall_detall?id=<?php echo $value['id']; ?>"  target="_parent">

            <img src="__upload__/<?php echo $value['picurl']; ?>" class="img-responsive">
            <h3><?php echo $value['title']; ?></h3>

            <p><?php echo $value['content']; ?></p>
            <span><?php echo $value['description']; ?></span>
        </a>
    </div>
    <?php endforeach; ?> 

</div>
</div>
<div class="container-fluid mall-main3">
    <h3>精品推荐</h3>

    <div id="mall-main3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner mall-sm-img">
         <!--<?php foreach($data2 as $value): ?>

              <li> 
                <input type="hidden" value="<?php echo $value['id']; ?>">
                <img src="__upload__/<?php echo $value['picurl']; ?>" class="img-responsive">

                <h3><?php echo $value['title']; ?></h3>

                <p><?php echo $value['content']; ?></p>
                <span><?php echo $value['description']; ?></span>
            </li>
            <?php endforeach; ?>  -->
            <div class="item active text-center">
                <li>
                    <img src="__img__/mall/main3/1.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p class="text-center">8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/2.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/3.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/4.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/5.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/6.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p class="text-center">8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
            </div>
            <div class="item text-center">
                <li>
                    <img src="__img__/mall/main3/7.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/8.png" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/9.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/10.png" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/11.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/12.png" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
            </div>
            <div class="item text-center">
                <li>
                    <img src="__img__/mall/main3/13.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/14.png" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/15.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/16.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/17.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main3/18.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
            </div>
        </div>

        <a class="left carousel-control" href="#mall-main3" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#mall-main3" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!-- main4 -->
<div class="container-fluid mall-main4">
    <div id="mall-main4" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mall-main4" data-slide-to="0" class="active"></li>
            <li data-target="#mall-main4" data-slide-to="1"></li>
            <li data-target="#mall-main4" data-slide-to="2"></li>
            <li data-target="#mall-main4" data-slide-to="3"></li>
            <li data-target="#mall-main4" data-slide-to="4"></li>
            <li data-target="#mall-main4" data-slide-to="5"></li>
            <li data-target="#mall-main4" data-slide-to="6"></li>

        </ol>


        <div class="carousel-inner mall-slide">

            <div class="item active">
                <img src="__img__/mall/main4/1.jpg" class="img-responsive">
            </div>
            <div class="item">
                <img src="__img__/mall/main4/2.jpg" class="img-responsive">
            </div>
            <div class="item">
                <img src="__img__/mall/main4/3.jpg" class="img-responsive">

            </div>
            <div class="item">
                <img src="__img__/mall/main4/4.png" class="img-responsive">

            </div>
            <div class="item">
                <img src="__img__/mall/main4/5.jpg" class="img-responsive">

            </div>

            <div class="item">
                <img src="__img__/mall/main4/6.jpg" class="img-responsive">

            </div>
            <div class="item">
                <img src="__img__/mall/main4/7.jpg" class="img-responsive">

            </div>

        </div>
    </div>

</div>

<div class="container-fluid mall-main5">
    <div class="col-sm-12">
        <ul class="list-unstyled list-inline">
            <li>
                <h2>手机</h2>
            </li>
            <li>
                <a href="##">荣耀</a>
            </li>
            <li>
                <a href="##">HUAWEI P系列</a>
            </li>
            <li>
                <a href="##">荣耀畅玩系列</a>
            </li>
            <li>
                <a href="##">HUAWEI Mate系列</a>
            </li>
            <li>
                <a href="##">HUAWEI nova系列</a>
            </li>
            <li>
                <a href="##">HUAWEI 麦芒系列</a>
            </li>
            <li>
                <a href="##">华为畅享系列</a>
            </li>
            <li>
                <a href="##">合约机</a>
            </li>

            <li class="pull-right">
                <h4><a href="##">更多 <span class="glyphicon glyphicon-menu-right"></span></a></h4>

            </li>
        </ul>
    </div>
    <div class="col-sm-12 text-center">
        <div class="col-sm-3">
            <a href="##" style="height:290px;width:288px;">
                <img src="__img__/mall/main5/1.jpg" class="img-responsive" style="height:290px;width:288px;">
            </a>
        </div>

        <?php foreach($data5 as $value): ?>
        <div class="col-sm-3 mall-img"> 
           <input type="hidden" value="<?php echo $value['id']; ?>">
           <a href="mall_detall?id=<?php echo $value['id']; ?>"  target="_parent">
            <img src="__upload__/<?php echo $value['picurl']; ?>" class="img-responsive">

            <h3><?php echo $value['title']; ?></h3>

            <p><?php echo $value['content']; ?></p>
            <span><?php echo $value['description']; ?></span>
        </a>
    </div>
    <?php endforeach; ?>

</div>
</div>
<div class="container-fluid mall-main6">
    <div class="col-sm-12">
        <ul class="list-unstyled list-inline">
            <li>
                <h2>笔记本电脑</h2>
            </li>
            <li>
                <a href="##">平板电脑</a>
            </li>
            <li>
                <a href="##">笔记本电脑</a>
            </li>
            <li>
                <a href="##">笔记本配件</a>
            </li>
            <li class="pull-right">
                <h4><a href="##">更多 <span class="glyphicon glyphicon-menu-right"></span></a></h4>

            </li>
        </ul>
    </div>
    <div class="col-sm-12 text-center">
        <div class="col-sm-3">
            <a href="##" style="height:290px;width:288px;">
                <img src="__img__/mall/main6/1.jpg" class="img-responsive" style="height:290px;width:288px;">
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main6/2.jpg" class="img-responsive">

                <h3>华为畅想7</h3>

                <p>赠价值298元礼品</p>

                <span>￥1099</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main6/3.jpg" class="img-responsive">

                <h3>荣耀V9 play</h3>

                <p>北欧极简设计 新品热卖</p>

                <span>￥999</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main6/4.jpg" class="img-responsive">

                <h3>华为畅想7 Plus</h3>

                <p>赠价值298元礼品</p>

                <span>￥1699</span>
            </a>
        </div>


    </div>
</div>


<div class="container-fluid mall-main7">
    <div class="col-sm-12">
        <ul class="list-unstyled list-inline">
            <li>
                <h2>精品平板</h2>
            </li>
            <li>
                <a href="##">平板电脑</a>
            </li>
            <li>
                <a href="##">笔记本电脑</a>
            </li>
            <li>
                <a href="##">笔记本配件</a>
            </li>
            <li class="pull-right">
                <h4><a href="##">更多 <span class="glyphicon glyphicon-menu-right"></span></a></h4>

            </li>
        </ul>
    </div>
    <div class="col-sm-12 text-center">
        <div class="col-sm-3">
            <a href="##" style="height:290px;width:288px;">
                <img src="__img__/mall/main7/1.jpg" class="img-responsive" style="height:290px; width:288px;">
            </a>
        </div>

        <?php foreach($data7 as $value): ?>
        <div class="col-sm-3 mall-img"> 
         <input type="hidden" value="<?php echo $value['id']; ?>">
         <a href="mall_detall?id=<?php echo $value['id']; ?>"  target="_parent">
            <img src="__upload__/<?php echo $value['picurl']; ?>" class="img-responsive">

            <h3><?php echo $value['title']; ?></h3>

            <p><?php echo $value['content']; ?></p>
            <span><?php echo $value['description']; ?></span>
        </a>
    </div>
    <?php endforeach; ?>

</div>

</div>
<div class="container-fluid mall-main8">
    <div class="col-sm-12">
        <ul class="list-unstyled list-inline">
            <li>
                <h2>智能穿戴</h2>
            </li>
            <li>
                <a href="##">手环</a>
            </li>
            <li>
                <a href="##">手表</a>
            </li>
            <li class="pull-right">
                <h4><a href="##">更多 <span class="glyphicon glyphicon-menu-right"></span></a></h4>

            </li>
        </ul>
    </div>
    <div class="col-sm-12 text-center">


        <div class="col-sm-3">
            <a href="##" style="height:290px;width:288px;">
                <img src="__img__/mall/main8/1.jpg" class="img-responsive" style="height:290px;width:288px;">
            </a>
        </div>
        <?php foreach($data8 as $value): ?>
        <div class="col-sm-3 mall-img"> 
           <input type="hidden" value="<?php echo $value['id']; ?>">
           <a href="mall_detall?id=<?php echo $value['id']; ?>"  target="_parent">
            <img src="__upload__/<?php echo $value['picurl']; ?>" class="img-responsive">

            <h3><?php echo $value['title']; ?></h3>

            <p><?php echo $value['content']; ?></p>
            <span><?php echo $value['description']; ?></span>
        </a>
    </div>
    <?php endforeach; ?>

</div>
</div>
<div class="container-fluid mall-main9">
    <div class="col-sm-12">
        <ul class="list-unstyled list-inline">
            <li>
                <h2>智能家居</h2>
            </li>
            <li>
                <a href="##">子母路由</a>
            </li>
            <li>
                <a href="##">电视盒子</a>
            </li>

            <li>
                <a href="##">路由器</a>
            </li>
            <li>
                <a href="##">电力猫</a>
            </li>
            <li>
                <a href="##">随行wifi</a>
            </li>
            <li>
                <a href="##">HUAWEI HiLink生态产品</a>
            </li>
            <li class="pull-right">
                <h4><a href="##">更多 <span class="glyphicon glyphicon-menu-right"></span></a></h4>

            </li>
        </ul>
    </div>
    <div class="col-sm-12 text-center">
        <div class="col-sm-6">
            <a href="##" style="height:296px;width:594px;">
                <img src="__img__/mall/main9/1.jpg" class="img-responsive" style="height:296px;width:594px;">
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main9/2.jpg" class="img-responsive">

                <h3>华为畅想7</h3>

                <p>赠价值298元礼品</p>

                <span>￥1099</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main9/3.jpg" class="img-responsive">

                <h3>荣耀V9 play</h3>

                <p>北欧极简设计 新品热卖</p>

                <span>￥999</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main9/4.png" class="img-responsive">

                <h3>华为畅想7 Plus</h3>

                <p>赠价值298元礼品</p>

                <span>￥1699</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main9/5.jpg" class="img-responsive">

                <h3>荣耀8青春版</h3>

                <p>最高优惠100元</p>

                <span>￥1099</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main9/6.jpg" class="img-responsive">

                <h3>HUAWEI Mate 9</h3>

                <p>最高优惠200元</p>

                <span>￥3599</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main9/7.jpg" class="img-responsive">

                <h3>荣耀8</h3>

                <p>领券下单减350+赠好礼</p>

                <span>￥1899</span>
            </a>
        </div>

    </div>

</div>
<div class="container-fluid mall-main10">
    <div id="mall-main10" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner mall-sm-img">
            <div class="item active text-center">
                <li>
                    <img src="__img__/mall/main10/1.png" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p class="text-center">8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main10/2.png" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main10/3.png" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main10/4.png" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main10/5.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main10/6.png" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p class="text-center">8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
            </div>
            <div class="item text-center">
                <li>
                    <img src="__img__/mall/main10/7.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main10/8.png" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main10/9.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main10/10.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main10/11.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main10/12.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
            </div>
        </div>

        <a class="left carousel-control" href="#mall-main10" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#mall-main10" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<div class="container-fluid mall-main11">
    <div class="col-sm-12">
        <ul class="list-unstyled list-inline">
            <li>
                <h2>热销配件</h2>
            </li>
            <li>
                <a href="##">移动电源</a>
            </li>
            <li>
                <a href="##">耳机</a>
            </li>

            <li>
                <a href="##">充电器/线材</a>
            </li>
            <li>
                <a href="##">自拍杆/支架</a>
            </li>
            <li>
                <a href="##">音箱</a>
            </li>
            <li>
                <a href="##">U盘/存储卡</a>
            </li>

            <li>
                <a href="##">排插</a>
            </li>
            <li>
                <a href="##">摄像机/镜头</a>
            </li>
            <li>
                <a href="##">智能硬件</a>
            </li>
            <li>
                <a href="##">生活周边</a>
            </li>
            <li class="pull-right">
                <h4><a href="##">更多 <span class="glyphicon glyphicon-menu-right"></span></a></h4>

            </li>
        </ul>
    </div>
    <div class="col-sm-12 text-center">
        <div class="col-sm-6">
            <a href="##" style="height:296px;width:594px;">
                <img src="__img__/mall/main11/1.jpg" class="img-responsive" style="height:296px;width:594px;">
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main11/2.jpg" class="img-responsive">

                <h3>华为畅想7</h3>

                <p>赠价值298元礼品</p>

                <span>￥1099</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main11/3.jpg" class="img-responsive">

                <h3>荣耀V9 play</h3>

                <p>北欧极简设计 新品热卖</p>

                <span>￥999</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main11/4.jpg" class="img-responsive">

                <h3>华为畅想7 Plus</h3>

                <p>赠价值298元礼品</p>

                <span>￥1699</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main11/5.jpg" class="img-responsive">

                <h3>荣耀8青春版</h3>

                <p>最高优惠100元</p>

                <span>￥1099</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main11/6.jpg" class="img-responsive">

                <h3>HUAWEI Mate 9</h3>

                <p>最高优惠200元</p>

                <span>￥3599</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main11/7.jpg" class="img-responsive">

                <h3>荣耀8</h3>

                <p>领券下单减350+赠好礼</p>

                <span>￥1899</span>
            </a>
        </div>

    </div>

</div>
<div class="container-fluid mall-main12">
    <div id="mall-main12" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner mall-sm-img">
            <div class="item active text-center">
                <li>
                    <img src="__img__/mall/main12/1.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p class="text-center">8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main12/2.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main12/3.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main12/4.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main12/5.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main12/6.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p class="text-center">8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
            </div>
            <div class="item text-center">
                <li>
                    <img src="__img__/mall/main12/7.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main12/8.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main12/9.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main12/10.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main12/11.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main12/12.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
            </div>
        </div>

        <a class="left carousel-control" href="#mall-main12" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#mall-main12" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>

<div class="container-fluid mall-main13">
    <div class="col-sm-12">
        <ul class="list-unstyled list-inline">
            <li>
                <h2>热销配件</h2>
            </li>
            <li>
                <a href="##">移动电源</a>
            </li>
            <li>
                <a href="##">耳机</a>
            </li>

            <li>
                <a href="##">充电器/线材</a>
            </li>
            <li>
                <a href="##">自拍杆/支架</a>
            </li>
            <li>
                <a href="##">音箱</a>
            </li>
            <li>
                <a href="##">U盘/存储卡</a>
            </li>

            <li>
                <a href="##">排插</a>
            </li>
            <li>
                <a href="##">摄像机/镜头</a>
            </li>
            <li>
                <a href="##">智能硬件</a>
            </li>
            <li>
                <a href="##">生活周边</a>
            </li>
            <li class="pull-right">
                <h4><a href="##">更多 <span class="glyphicon glyphicon-menu-right"></span></a></h4>

            </li>
        </ul>
    </div>
    <div class="col-sm-12 text-center">
        <div class="col-sm-6">
            <a href="##" style="height:296px;width:594px;">
                <img src="__img__/mall/main13/1.jpg" class="img-responsive" style="height:296px;width:594px;">
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main13/2.jpg" class="img-responsive">

                <h3>华为畅想7</h3>

                <p>赠价值298元礼品</p>

                <span>￥1099</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main13/3.jpg" class="img-responsive">

                <h3>荣耀V9 play</h3>

                <p>北欧极简设计 新品热卖</p>

                <span>￥999</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main13/4.jpg" class="img-responsive">

                <h3>华为畅想7 Plus</h3>

                <p>赠价值298元礼品</p>

                <span>￥1699</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main13/5.jpg" class="img-responsive">

                <h3>荣耀8青春版</h3>

                <p>最高优惠100元</p>

                <span>￥1099</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main13/6.jpg" class="img-responsive">

                <h3>HUAWEI Mate 9</h3>

                <p>最高优惠200元</p>

                <span>￥3599</span>
            </a>
        </div>
        <div class="col-sm-3 mall-img">
            <a href="##">
                <img src="__img__/mall/main13/7.jpg" class="img-responsive">

                <h3>荣耀8</h3>

                <p>领券下单减350+赠好礼</p>

                <span>￥1899</span>
            </a>
        </div>

    </div>

</div>
<div class="container-fluid mall-main14">
    <div id="mall-main14" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner mall-sm-img">
            <div class="item active text-center">
                <li>
                    <img src="__img__/mall/main14/1.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p class="text-center">8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main14/2.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main14/3.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main14/4.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main14/5.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main14/6.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p class="text-center">8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
            </div>
            <div class="item text-center">
                <li>
                    <img src="__img__/mall/main14/7.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main14/8.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main14/9.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main14/10.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main14/3.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
                <li>
                    <img src="__img__/mall/main14/4.jpg" class="img-responsive">

                    <h3>HUAWEI WATCH 2 Pro</h3>

                    <p>8元订金可抵108元 </p>
                    <span>¥2588</span>
                </li>
            </div>
        </div>

        <a class="left carousel-control" href="#mall-main14" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#mall-main14" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

</div>
<div class="container-fluid mall-main15">
    <img src="__img__/mall/main15/1.jpg" class="img-responsive">
</div>

</div>
<div class="col-sm-pull-3 container-fluid mall-footer text-center">
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
                <p class="footer-new text-left pull-left"><?php echo lang('©2017 华为科技有限公司'); ?> <a  href="http://www.miitbeian.gov.cn/">
                    <?php echo lang('粤A2-20044005号'); ?> </a></p>

                    <span><a href="#"><?php echo lang('法律声明'); ?></a></span>
                    <span><a href="#"><?php echo lang('隐私保护'); ?></a></span>
                    <span><a href="#"><?php echo lang('联系我们'); ?></a></span>

                </div>
            </div>
        </div>
    </div>
    <script src="__JS__/all/jquery-1.11.3.min.js"></script>
    <script src="__JS__/all/jquery.mobile-1.4.5.min.js"></script>
    <script>
    $(document).on("pagecreate", "#body", function () {
        $("body").on("swipeleft", function () {
            alert("确定跳转......");
            window.location.href = "<?php echo url('../admin/admin/login'); ?>";
        });
    });

    </script>
    <script type="text/javascript">
    //商品列表鼠标移入显示右边的详细列表
    $(function () {
        $(".mall-main-list ul li").hover(
            function () {
                $(this).find(".mall-right").show();
            },
            function () {
                $(this).find(".mall-right").hide();
            }
            )
    });

    </script>
    <script src="__JS__/all/bootstrap.min.js"></script>

</body>
</html>

