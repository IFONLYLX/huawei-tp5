<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\phpstudy\WWW\tp4\public/../app/index\view\index\index.html";i:1510413168;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" name="toTop" content="true">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--定义设备-->
    <!--自跳转页面-->
    <title>华为2017官方首页</title>
    <link rel="shortcut icon" href="__PUBLIC__/favicon.ico">
    <!--自定义图标-->
    <link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.min.css">

    <!--引入bootstrap css样式 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
    <link  href="/tp5/public/static/css/index.css" rel="stylesheet" type="text/css" id="en">
    <link rel="stylesheet" type="text/css" href="__CSS__/demo.css">
    <!--自定义css样式-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script type="text/javascript"> 

    function change(a){
        var css=document.getElementById("en");
        if (a==1)
         css.setAttribute("href","/tp4/public/static/css/index.css");

     if (a==2)
         css.setAttribute("href","/tp4/public/static/css/en.css");

     　　
 }
 </script> 
</head>
<body id="body" onLoad="save()">
    <!--左边定位导航-->
<!--<div id="newsmain">

    <ul>
        <li><a href="##">
            <div class="newmain">联系电话：(0755)28780808</div>
            <img src="img/links/l01.png"></a>


        </li>
        <li><a href="##">
            <div class="newmain1"><img src="img/links/微信.png" width="90" height="95"></div>
            <img src="img/links/l03.png"></a>


        </li>
        <li><a href="##">
            <div class="newmain2"><img src="img/links/QQ登录.png" width="90" height="95"></div>
            <img src="img/links/l04.png"></a></li>
        <li><a href="##">
            <div class="newmain3">地址：深圳市龙岗区坂田华为基地</div>
            <img src="img/links/l05.png"></a></li>
    </ul>
    <div class="newpic">
        <img src="img/links/l06.png">

    </div>
</div>-->
<div id="right-icon" class="hidden-xs">
    <ul class="list-unstyled">
        <li>
            <div id="toTop"><a href="##"><?php echo lang('返回顶层'); ?></a></div>
        </li>
        <li>
            <div><a href="##"><?php echo lang('在线反馈'); ?></a></div>
        </li>
        <li>
            <div><a href="##"><?php echo lang('邮件给我'); ?></a></div>
        </li>
        <li>
            <div><a href="##"><?php echo lang('电话联系'); ?></a></div>
        </li>

    </ul>


</div>
<!--导航-->
<div class="navbar-fixed-top">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="pull-right">
                <div id="nav-main" class="nav-main-top">
                    <!-- <?php echo $value=session('id'); ?> -->

                    <!--  <?php echo $data['username']; ?> -->
                   <!--  <span><a href="<?php echo url('user/logout'); ?>" target="_parent"><?php echo lang('注销'); ?></a>
                   <a href="<?php echo url('user/userinfo'); ?>" target="_parent"><?php echo $value=session('username'); ?></a></span> -->
<!-- 
   <a href="userinfo?username=<?php echo $value; ?>"  target="_parent"> <input type="button" value="<?php echo $value; ?>"></a> -->
   <div class="btn-group" class="en-language">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo lang('选择语言/区域'); ?>
      </button>
      <ul class="dropdown-menu" style="min-width:120px;padding:0px;">

        <li> <button style="width:100%" onclick="change(2)" type="button" lang="en" class="btn btn-primary btn-sm" id="btn"><?php echo lang('英文'); ?></button></li>
        <li><button style="width:100%" onclick="change(1)" type="button" lang="cn" class="btn btn-info btn-sm" id="btns"><?php echo lang('中文'); ?></button>  
        </li>

    </ul>
</div>
<button id="btn" onclick="change(2)">click</button>
<?php
if ($value==null) {
   echo '<span><a href="/tp5/public/index/index/login" target="_parent">登录</a>-';
   echo '<a href="/tp5/public/index/index/register" target="_parent">注册</a></span>';
}else{

    echo "<span><a href='userinfo?username=$value'  target='_parent'>个人信息</a>-";
    echo '<a href="/tp5/public/index/user/logout.html" target="_parent">注销</a></span>';
}
?>
<!--  <span><a href="<?php echo url('index/login'); ?>" target="_parent"><?php echo lang('登录'); ?></a>/<a href="<?php echo url('index/register'); ?>" target="_parent"><?php echo lang('注册'); ?></a></span> -->
<span><a href="<?php echo url('../admin/admin/login'); ?>" target="_parent"><?php echo lang('后台'); ?></a></span>
</div>
</div>
</div>
<!--下拉菜单-->
<div class="container-fluid">
    <div class="navbar-header">
        <button class="navbar-toggle hamburger" id="hamburger" data-toggle="collapse"
        data-target="#responsenav">

        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

    </button>
    <a href="<?php echo url('index/index'); ?>" class="navbar-brand">
        <img src="__img__/华为logo.png" class="img-responsive">
    </a>
</div>
<div class="drop-toggle">
    <div class="collapse navbar-collapse" id="responsenav">
        <ul class="nav navbar-nav dropdown-list">

            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span>
                <?php echo lang('我想'); ?><span class="caret"></span></a>
                <ul class="dropdown-menu hidden-lg hidden-md">

                    <li><a href="##"><?php echo lang('浏览智能手机'); ?></a></li>
                    <li><a href="##"><?php echo lang('购买手机产品'); ?></a></li>
                    <li><a href="##"><?php echo lang('获取技术支持'); ?></a></li>
                    <li><a href="##"><?php echo lang('查找销售门店'); ?></a></li>
                    <li><a href="##"><?php echo lang('访问消费者网站'); ?> ></a></li>

                    <li><a href="##"><?php echo lang('提交购买需求'); ?></a></li>
                    <li><a href="##"><?php echo lang('查看成功案例'); ?></a></li>
                    <li><a href="##"><?php echo lang('查找营销资料'); ?></a></li>
                    <li><a href="##"><?php echo lang('成为渠道合作伙伴'); ?></a></li>
                    <li><a href="##"><?php echo lang('访问企业业务网站'); ?> ></a></li>

                </ul>
            </li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('个人及家电产品'); ?></a>

                <ul class="dropdown-menu  hidden-lg hidden-md">
                    <li><a href="##"><?php echo lang('智能手机'); ?></a></li>
                    <li><a href="##"><?php echo lang('笔记本&平板'); ?></a></li>
                    <li><a href="##"><?php echo lang('穿戴设备'); ?></a></li>
                    <li><a href="##"><?php echo lang('移动宽带'); ?></a></li>
                    <li><a href="##"><?php echo lang('智能家居'); ?></a></li>
                    <li><a href="##"> <?php echo lang('配件'); ?></a></li>
                </ul>
            </li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('商用解决方案'); ?></a>

                <ul class="dropdown-menu  hidden-lg  hidden-md">
                    <p class=" text-danger"><?php echo lang('热点话题'); ?></p>
                    <li><a href="##"><?php echo lang('大视频'); ?></a></li>
                    <li><a href="##"><?php echo lang('大IT'); ?></a></li>
                    <li><a href="##"><?php echo lang('大运营'); ?></a></li>
                    <li><a href="##"><?php echo lang('大结构'); ?></a></li>
                    <li><a href="##"><?php echo lang('大管道'); ?></a></li>
                    <li><a href="##"><?php echo lang('软件定义网络(SDN)'); ?></a></li>
                    <li><a href="##"><?php echo lang('精简IT,敏捷商道'); ?></a></li>
                    <li><a href="##"><?php echo lang('物联网,驱动行业创新'); ?></a></li>
                    <p class="text-danger"><?php echo lang('行业'); ?></p>
                    <li><a href="##"><?php echo lang('公共安全'); ?></a></li>
                    <li><a href="##"><?php echo lang('政务'); ?></a></li>
                    <li><a href="##"><?php echo lang('轨道'); ?></a></li>
                    <li><a href="##"><?php echo lang('电力'); ?></a></li>
                    <li><a href="##"><?php echo lang('金融'); ?></a></li>
                    <li><a href="##"><?php echo lang('影音传媒'); ?></a></li>
                    <li><a href="##"><?php echo lang('教育'); ?></a></li>
                    <li><a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a></li>
                    <p class="text-danger"><?php echo lang('企业产品及服务'); ?></p>

                    <li><a href="##"><?php echo lang('交换机'); ?></a></li>
                    <li><a href="##"><?php echo lang('路由器'); ?></a></li>
                    <li><a href="##"><?php echo lang('WLAN'); ?></a></li>
                    <li><a href="##"><?php echo lang('服务器'); ?></a></li>
                    <li><a href="##"><?php echo lang('存储'); ?></a></li>
                    <li><a href="##"><?php echo lang('云计算'); ?></a></li>
                    <li><a href="##"><?php echo lang('网络能源'); ?></a></li>
                    <li><a href="##"><?php echo lang('服务创新'); ?></a></li>
                    <li><a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a></li>
                </ul>


            </li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('技术支持'); ?></a>
                <ul class="dropdown-menu  hidden-lg  hidden-md">
                    <p class="text-danger"><?php echo lang('消费者'); ?></p>
                    <li><a href="##"><?php echo lang('寄修服务'); ?></a></li>
                    <li><a href="##"><?php echo lang('预约服务'); ?></a></li>
                    <li><a href="##"><?php echo lang('保修政策'); ?></a></li>
                    <li><a href="##"><?php echo lang('升级软件应用'); ?></a></li>
                    <li><a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a></li>
                    <p class="text-danger"><?php echo lang('企业用户'); ?></p>
                    <li><a href="##"><?php echo lang('技术支持'); ?></a></li>
                    <li><a href="##"><?php echo lang('软件下载'); ?></a></li>
                    <li><a href="##"><?php echo lang('互动社区'); ?></a></li>
                    <li><a href="##"><?php echo lang('工具'); ?></a></li>
                    <li><a href="##"><?php echo lang('案例库'); ?></a></li>
                    <li><a href="##"><?php echo lang('华为培训与认证'); ?></a></li>
                    <li><a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a></li>
                    <p class="text-danger"><?php echo lang('运营商用户'); ?></p>

                    <li><a href="##"><?php echo lang('技术支持'); ?></a></li>
                    <li><a href="##"><?php echo lang('软件下载'); ?></a></li>
                    <li><a href="##"><?php echo lang('工具'); ?></a></li>
                    <li><a href="##"><?php echo lang('知识库'); ?></a></li>
                    <li><a href="##"><?php echo lang('公告'); ?></a></li>
                    <li><a href="##"><?php echo lang('互动社区'); ?></a></li>
                    <li><a href="##"><?php echo lang('智能问答'); ?></a></li>
                    <li><a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a></li>


                </ul>


            </li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('合作伙伴'); ?></a>

                <ul class="dropdown-menu  hidden-lg  hidden-md">
                    <p class="text-danger"><?php echo lang('合作伙伴计划'); ?></p>
                    <li><a href="##"><?php echo lang('渠道伙伴政策'); ?></a></li>
                    <li><a href="##"><?php echo lang('华为技术认证'); ?></a></li>
                    <li><a href="##"><?php echo lang('企业业务解决方案伙伴计划'); ?></a></li>
                    <li><a href="##"><?php echo lang('运营商解决方案伙伴计划'); ?></a></li>
                    <li><a href="##"><?php echo lang('服务合作伙伴计划'); ?></a></li>
                    <p class="text-danger"><?php echo lang('合作伙伴展示'); ?></p>
                    <li><a href="##"><?php echo lang('渠道伙伴'); ?></a></li>
                    <li><a href="##"><?php echo lang('联盟伙伴'); ?></a></li>
                    <li><a href="##"><?php echo lang('Marketplace'); ?></a></li>
                    <li><a href="##"><?php echo lang('兼容性列表'); ?></a></li>
                    <p class="text-danger"><?php echo lang('联系合作伙伴'); ?></p>
                    <li><a href="##"><?php echo lang('查找经销商'); ?></a></li>
                    <li><a href="##"><?php echo lang('查找服务商'); ?></a></li>
                    <li><a href="##"><?php echo lang('查找解决方案伙伴'); ?></a></li>


                </ul>

            </li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('开发者'); ?></a></li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('华为商城'); ?></a></li>
        </ul>
        <ul class="list-unstyled nav navbar-nav pull-right new-search-bg">
            <li><a href="##" class="dropdown-toggle" data-toggle="dropdown">search</a>
                <ul class="list-unstyled dropdown-menu dropdown-menu-right new-search">
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="搜索..."/>
                        <span class="input-group-addon btn">
                            <span class=" glyphicon glyphicon-search">
                            </span></span>
                        </div>
                    </ul>

                </li>
            </ul>


        </div>


        <div class="dropmenu-down" style="z-index:999;">
            <div class="dropmenu">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="__img__/nav/phone_1.png">
                            </div>
                            <div class="col-sm-9">
                                <ul class="list-unstyled">
                                    <li><a href="##"><?php echo lang('浏览智能手机'); ?></a></li>
                                    <li><a href="##"><?php echo lang('购买手机产品'); ?></a></li>
                                    <li><a href="##"><?php echo lang('获取技术支持'); ?></a></li>
                                    <li><a href="##"><?php echo lang('查找销售门店'); ?></a></li>
                                    <li><a href="##"><?php echo lang('访问消费者网站'); ?> ></a></li>


                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="__img__/nav/nav_ebg.png">
                            </div>
                            <div class="col-sm-9">
                                <ul class="list-unstyled">
                                    <li><a href="##"><?php echo lang('提交购买需求'); ?></a></li>
                                    <li><a href="##"><?php echo lang('查看成功案例'); ?></a></li>
                                    <li><a href="##"><?php echo lang('查找营销资料'); ?></a></li>
                                    <li><a href="##"><?php echo lang('成为渠道合作伙伴'); ?></a></li>
                                    <li><a href="##"><?php echo lang('访问企业业务网站'); ?> ></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="__img__/nav/nav_cbg9-21.png">
                            </div>
                            <div class="col-sm-9">
                                <ul class="list-unstyled">
                                    <li><a href="##"><?php echo lang('了解行业热点'); ?></a></li>
                                    <li><a href="##"><?php echo lang('了解运营商解决方案'); ?></a></li>
                                    <li><a href="##"><?php echo lang('查找运营商相关产品'); ?></a></li>
                                    <li><a href="##"><?php echo lang('了解运营商服务'); ?></a></li>
                                    <li><a href="##"><?php echo lang('访问运营商业务网站'); ?> </a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-3">
                        <div class="row">
                            <ul class="list-unstyled">
                                <li><a href="##"><?php echo lang('联系华为'); ?></a></li>
                                <li><a href="##"><?php echo lang('了解管理团队'); ?></a></li>
                                <li><a href="##"><?php echo lang('关注华为动态'); ?></a></li>
                                <li><a href="##"><?php echo lang('加入华为'); ?></a></li>
                                <li><a href="##"><?php echo lang('在线反馈'); ?> </a></li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="dropmenu">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="##">
                            <p><?php echo lang('智能手机'); ?></p>
                            <img src="__img__/nav/phone_1.png">
                            <h4>HUAWEI Mate 9</h4></a>

                            <a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a>

                        </div>
                        <div class="col-sm-2">
                            <a href="##">
                                <p><?php echo lang('笔记本 & 平板'); ?> </p>
                                <img src="__img__/nav/dropmenu2.png">
                                <h4>MateBook</h4>
                            </a>
                            <a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a>

                        </div>
                        <div class="col-sm-2">
                            <a href="##">
                                <p><?php echo lang('穿戴设备'); ?></p>
                                <img src="__img__/nav/dropmenu3.png">
                                <h4>TalkBand B3</h4>
                            </a>
                            <a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a>

                        </div>
                        <div class="col-sm-2">
                            <a href="##">
                                <p><?php echo lang('移动宽带'); ?></p>
                                <img src="__img__/nav/dropmenu4.png">
                                <h4><?php echo lang('随行WIFI Plus'); ?></h4>
                            </a>
                            <a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a>

                        </div>
                        <div class="col-sm-2">
                            <a href="##">
                                <p><?php echo lang('智能家居'); ?></p>
                                <img src="__img__/nav/dropmenu5.png">
                                <h4><?php echo lang('华为路由器Q1'); ?></h4>
                            </a>
                            <a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a>

                        </div>
                        <div class="col-sm-2">
                            <a href="##">
                                <p><?php echo lang('配件'); ?></p>
                                <img src="__img__/nav/dropmenu6.png" style="margin-left:45px;">
                                <h4><?php echo lang('VR眼镜'); ?></h4>
                            </a>
                            <a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a>

                        </div>

                    </div>

                </div>

                <div class="dropmenu">
                    <div class="row dropmenu-list3">
                        <div class="col-sm-2">
                            <p class=" text-left"><?php echo lang('热点话题'); ?></p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##"><?php echo lang('大视频'); ?></a></li>
                                <li><a href="##"><?php echo lang('大IT'); ?></a></li>
                                <li><a href="##"><?php echo lang('大运营'); ?></a></li>
                                <li><a href="##"><?php echo lang('大结构'); ?></a></li>
                                <li><a href="##"><?php echo lang('大管道'); ?></a></li>
                                <li><a href="##"><?php echo lang('软件定义网络(SDN)'); ?></a></li>
                                <li><a href="##"><?php echo lang('精简IT,敏捷商道'); ?></a></li>
                                <li><a href="##"><?php echo lang('物联网,驱动行业创新'); ?></a></li>

                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left"><?php echo lang('行业'); ?></p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##"><?php echo lang('公共安全'); ?></a></li>
                                <li><a href="##"><?php echo lang('政务'); ?></a></li>
                                <li><a href="##"><?php echo lang('轨道'); ?></a></li>
                                <li><a href="##"><?php echo lang('电力'); ?></a></li>
                                <li><a href="##"><?php echo lang('金融'); ?></a></li>
                                <li><a href="##"><?php echo lang('影音传媒'); ?></a></li>
                                <li><a href="##"><?php echo lang('教育'); ?></a></li>
                                <li><a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a></li>
                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left"><?php echo lang('企业产品及服务'); ?></p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##"><?php echo lang('交换机'); ?></a></li>
                                <li><a href="##"><?php echo lang('路由器'); ?></a></li>
                                <li><a href="##"><?php echo lang('WLAN'); ?></a></li>
                                <li><a href="##"><?php echo lang('服务器'); ?></a></li>
                                <li><a href="##"><?php echo lang('存储'); ?></a></li>
                                <li><a href="##"><?php echo lang('云计算'); ?></a></li>
                                <li><a href="##"><?php echo lang('网络能源'); ?></a></li>
                                <li><a href="##"><?php echo lang('服务创新'); ?></a></li>
                                <li><a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left"><?php echo lang('运营商产品及服务'); ?></p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##"><?php echo lang('无线网络'); ?></a></li>
                                <li><a href="##"><?php echo lang('固定网络'); ?></a></li>
                                <li><a href="##"><?php echo lang('云核心网'); ?></a></li>
                                <li><a href="##"><?php echo lang('电信软件'); ?></a></li>
                                <li><a href="##"><?php echo lang('IT基础设施'); ?></a></li>
                                <li><a href="##"><?php echo lang('网络能源'); ?></a></li>
                                <li><a href="##"><?php echo lang('全球服务'); ?></a></li>
                                <li><a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a></li>
                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p><?php echo lang('其他产品'); ?></p>

                            <p><a href="##"><?php echo lang('智能光伏'); ?></a></p>

                        </div>


                    </div>

                </div>
                <div class="dropmenu">
                    <div class="row dropmenu-list4">
                        <div class="col-sm-2">
                            <p class=" text-left"><?php echo lang('消费者'); ?></p>
                            <ul class="list-unstyled  text-left">

                                <li><a href="##"><?php echo lang('寄修服务'); ?></a></li>
                                <li><a href="##"><?php echo lang('预约服务'); ?></a></li>
                                <li><a href="##"><?php echo lang('保修状态查询'); ?></a></li>
                                <li><a href="##"><?php echo lang('保修政策'); ?></a></li>
                                <li><a href="##"><?php echo lang('花粉俱乐部'); ?></a></li>
                                <li><a href="##"><?php echo lang('服务中心'); ?></a></li>
                                <li><a href="##"><?php echo lang('升级软件应用'); ?></a></li>
                                <li><a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a></li>
                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left"><?php echo lang('企业用户'); ?></p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##"><?php echo lang('技术支持'); ?></a></li>
                                <li><a href="##"><?php echo lang('软件下载'); ?></a></li>
                                <li><a href="##"><?php echo lang('互动社区'); ?></a></li>
                                <li><a href="##"><?php echo lang('工具'); ?></a></li>
                                <li><a href="##"><?php echo lang('文档查找'); ?></a></li>
                                <li><a href="##"><?php echo lang('案例库'); ?></a></li>
                                <li><a href="##"><?php echo lang('华为培训与认证'); ?></a></li>
                                <li><a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a></li>
                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left"><?php echo lang('运营商用户'); ?></p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##"><?php echo lang('技术支持'); ?></a></li>
                                <li><a href="##"><?php echo lang('软件下载'); ?></a></li>
                                <li><a href="##"><?php echo lang('工具'); ?></a></li>
                                <li><a href="##"><?php echo lang('知识库'); ?></a></li>
                                <li><a href="##"><?php echo lang('公告'); ?></a></li>
                                <li><a href="##"><?php echo lang('互动社区'); ?></a></li>
                                <li><a href="##"><?php echo lang('智能问答'); ?></a></li>
                                <li><a href="##" class="lx"><?php echo lang('查看更多'); ?> ></a></li>
                            </ul>
                        </div>

                        <div class="col-sm-2">
                            <img src="__img__/nav/group_nav_support.jpg" class="img-responsive">

                            <div><?php echo lang('在线技术支持、软件下载、文档共享，无论您遇到任何问题，我们都将随时为您提供服务。'); ?></div>

                        </div>


                    </div>

                </div>

                <div class="dropmenu">
                    <div class="row dropmenu-list3 dropmenu-list5">
                        <div class="col-sm-2">
                            <p class=" text-left"><?php echo lang('合作伙伴计划'); ?></p>
                            <ul class="list-unstyled  text-left">

                                <li><a href="##"><?php echo lang('渠道伙伴政策'); ?></a></li>
                                <li><a href="##"><?php echo lang('华为技术认证'); ?></a></li>
                                <li><a href="##"><?php echo lang('企业业务解决方案伙伴计划'); ?></a></li>
                                <li><a href="##"><?php echo lang('运营商解决方案伙伴计划'); ?></a></li>
                                <li><a href="##"><?php echo lang('服务合作伙伴计划'); ?></a></li>

                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left"><?php echo lang('合作伙伴展示'); ?></p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##"><?php echo lang('渠道伙伴'); ?></a></li>
                                <li><a href="##"><?php echo lang('联盟伙伴'); ?></a></li>
                                <li><a href="##"><?php echo lang('Marketplace'); ?></a></li>
                                <li><a href="##"><?php echo lang('兼容性列表'); ?></a></li>
                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left"><?php echo lang('联系合作伙伴'); ?></p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##"><?php echo lang('查找经销商'); ?></a></li>
                                <li><a href="##"><?php echo lang('查找服务商'); ?></a></li>
                                <li><a href="##"><?php echo lang('查找解决方案伙伴'); ?></a></li>
                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left"><?php echo lang('获取资源'); ?></p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##"><?php echo lang('合作伙伴大学'); ?></a></li>
                            </ul>
                        </div>

                        <div class="col-sm-2">
                            <p class="text-left"><span class="glyphicon glyphicon-user"></span><?php echo lang('渠道伙伴系统登录'); ?></p>

                            <p class="text-left"><span class="glyphicon glyphicon-lock"></span> <?php echo lang('解决方案伙伴系统登录'); ?></p>

                            <p class="text-left"><span class="glyphicon glyphicon-cloud"></span> <?php echo lang('企业用户合作伙伴门户'); ?></p>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>

</div>

<!--首页图片-->
<div class="index">
    <div class="i-bg">
        <img id="bg" src="__img__/2017body/home2018.jpg">

        <div class="bg">
            <img src="__img__/2017body/home.png" class="img-responsive hidden-xs"><br>
            <!-- <img src="__img__/2017body/home.png" class="img-responsive visible-xs"> -->
            <p class="pull-right btn btn-info btn-lg hidden-xs"><?php echo lang('了解更多'); ?> <span class="glyphicon glyphicon-menu-right"></span></p>
        </div>
    </div>
    <div class="container visible-xs text-center text-white"><h3><?php echo lang('新ICT重塑商业价值'); ?></h3>

        <p><?php echo lang('全球197家世界500强企业选择华为携手数字化转型'); ?></p></div>

    </div>
    <!--图片内容-->
    <div class="container-fluid">
        <div class="content">

            <div class="grid">
                <figure class="effect-sadie aa effect-lily sm-fg hidden-xs">
                    <img src="__img__/page/pic1.jpg" alt="img01"/>

                    <div class="hidden-xs  hidden-sm">
                        <figcaption>
                            <h2 style="top:90%"><?php echo lang('每一拍都是大片'); ?></h2>

                            <a href="#">View more</a>
                        </figcaption>
                    </div>
                </figure>
                <div class="visible-xs">
                    <img src="__img__/page/pic1.jpg" class=" img-responsive" alt="img01"/>

                    <h2><?php echo lang('每一拍都是大片'); ?></h2>
                </div>
                <figure class="effect-sadie cc  effect-lily hidden-xs">
                    <img src="__img__/2017body/pic1.jpg" class=" img-responsive" alt="img2"/>

                    <div class="hidden-xs  hidden-sm">
                        <figcaption>
                            <h2 style="top:60%"><?php echo lang('与伙伴同行，打造智能社会五朵云之一'); ?></h2>


                            <p><?php echo lang('云成为智能社会的重要基石，华为有决心、也有能力和广大的伙伴一起，在智能社会时代打造“全球5朵云之一”。'); ?></p>
                            <a href="#">View more</a>
                        </figcaption>
                    </div>
                </figure>
                <div class="visible-xs">
                    <img src="__img__/2017body/pic1.jpg" class=" img-responsive" alt="img2"/>

                    <h2><?php echo lang('与伙伴同行，打造智能社会五朵云之一'); ?></h2>

                    <p><?php echo lang('云成为智能社会的重要基石，华为有决心、也有能力和广大的伙伴一起，在智能社会时代打造“全球5朵云之一”。'); ?></p>
                </div>
                <figure class="effect-sadie cc  effect-lily hidden-xs">
                    <img src="__img__/2017body/pic2.jpg" class=" img-responsive" alt="img3"/>

                    <div class="hidden-xs  hidden-sm">
                        <figcaption>
                            <h2><?php echo lang('DHL：智慧物流革命正当时'); ?></h2>

                            <p><?php echo lang('效率、速度和时间是物流行业的重中之重。DHL是全球物流行业的领军企业，首席信息官及首席运营官马库斯·沃斯博士，解读了数字化转型如何持续帮助其实现物流操作更绿色、快捷、顺畅。'); ?></p>
                            <a href="#">View more</a>
                        </figcaption>
                    </div>
                </figure>
                <div class="visible-xs">
                    <img src="__img__/2017body/pic2.jpg" class=" img-responsive" alt="img3"/>

                    <h2><?php echo lang('DHL：智慧物流革命正当时'); ?></h2>

                    <p><?php echo lang('效率、速度和时间是物流行业的重中之重。DHL是全球物流行业的领军企业，首席信息官及首席运营官马库斯·沃斯博士，解读了数字化转型如何持续帮助其实现物流操作更绿色、快捷、顺畅。'); ?></p>
                </div>
                <figure class="effect-sadie cc  effect-lily hidden-xs">
                    <img src="__img__/2017body/pic3.jpg" class=" img-responsive" alt="img4"/>

                    <div class="hidden-xs hidden-sm">
                        <figcaption>
                            <h2 style="top:60%"><?php echo lang('我们期待您的联接故事——描绘'); ?> <br><?php echo lang('更美好的全联接世界'); ?></h2>

                            <p><?php echo lang('让我们一起勾勒出未来智能社会的蓝图, 未来的生活将如你所想，一切皆有可能。'); ?> </p>

                            <a href="#">View more</a>
                        </figcaption>
                    </div>
                </figure>
                <div class="visible-xs">
                    <img src="__img__/2017body/pic3.jpg" class=" img-responsive" alt="img4"/>

                    <h2 style="top:60%"><?php echo lang('我们期待您的联接故事——描绘'); ?> <br><?php echo lang('更美好的全联接世界'); ?></h2>

                    <p><?php echo lang('让我们一起勾勒出未来智能社会的蓝图, 未来的生活将如你所想，一切皆有可能。'); ?> </p>

                </div>
                <figure class="effect-sadie cc  effect-lily hidden-xs">
                    <img src="__img__/2017body/pic4.jpg" class=" img-responsive" alt="img5"/>

                    <div class="hidden-xs  hidden-sm">
                        <figcaption>
                            <h2 style="top:60%"> <?php echo lang('软件开发云 集华为近30年研发精'); ?><br><?php echo lang('华开发神器'); ?> </h2>

                            <p style="width: 80%;"><?php echo lang('一站式云端DevOps平台，让软件开发简单高效。立即注册享1000元大礼，0成本玩转软件开发云。'); ?></p>
                            <a href="#">View more</a>
                        </figcaption>
                    </div>
                </figure>
                <div class="visible-xs">
                    <img src="__img__/2017body/pic4.jpg" class=" img-responsive" alt="img5"/>

                    <h2 style="top:70%"><?php echo lang('软件开发云 集华为近30年研发精'); ?> <br><?php echo lang('华开发神器'); ?></h2>

                    <p><?php echo lang('一站式云端DevOps平台，让软件开发简单高效。立即注册享1000元大礼，0成本玩转软件开发云。'); ?></p>
                </div>
            </div>

        </div>

    </div>
    <!--视频页面内容-->
    <div class="container-fluid" title="点击查看视频">
        <div class="panel panel-body i-v">
            <video width="100%" height="100%" poster="__img__/2017body/video_bg.jpg" controls autoplay>
                <source src="__img__/video/huawei-in.mp4" type="video/mp4">
                    <source src="__img__/video/huawei-in.flv" type="video/flv">
                        Your browser does not support the video tag.
                    </video>

                    <div class="i-vmain">
                        <p class="text-center hidden-xs"><?php echo lang('共建更美好的全联结世界'); ?></p>
                        <img src="__img__/body/video_btn.png" class="hidden-sm hidden-xs">


                    </div>
                </div>
            </div>
            <!--新闻内容-->
            <div class="container new-con">
                <div class="col-md-4">
                    <h2><a href=""> <?php echo lang('新闻'); ?> </a></h2>
                    <ul class="list-unstyled">
                        <li class="new">
                            <a href="##"><?php echo lang('华为在SDN/NFV世界峰会斩获七项大奖'); ?> </a>

                            <div class="date text-greys"> 2017-10-12</div>
                        </li>

                        <li class="new">
                            <a href="##"><?php echo lang('华为FusionInsight被IDC评为中国大数据MarketScape领导者象限第一'); ?> </a>

                            <div class="date text-greys">2017-10-12</div>
                        </li>

                        <li class="new">
                            <a href="##"><?php echo lang('华为发布SDN及NFV系列商业与技术创新成果'); ?> </a>

                            <div class="date text-greys">2017-10-12</div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="col-sm-12">
                        <h2><a href="##"> <?php echo lang('展会活动'); ?></a></h2>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <img src="__img__/2017body/m-l.jpg" class="img-responsive">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="##"> <?php echo lang('SCEWC 2017暨华为全球智慧城市峰会'); ?> 

                                    </a>

                                    <p><?php echo lang('新ICT，打造智慧城市神经系统'); ?></p>

                                    <p><?php echo lang('西班牙，巴塞罗那 11月14日-16日'); ?></p>
                                </li>
                            </ul>
                        </div>


                    </div>
                    <div class="col-sm-6">

                        <div>
                            <img src="__img__/2017body/m-r.jpg" class="img-responsive">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="##"><?php echo lang('2017全球超宽带高峰论坛'); ?></a>

                                    <p><?php echo lang('全云化，新增长'); ?></p>

                                    <p><?php echo lang('中国，杭州 10月18日-19日'); ?></p>
                                </li>

                            </ul>
                        </div>
                    </div>
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
             <script src="__JS__/jquery-1.11.3.min.js"></script>
             <!--1429行有改动-->
             <script src="__JS__/jquery.mobile-1.4.5.min.js"></script>
             <script>
             $(document).on("pagecreate", "#body", function () {
                $("body").on("swipeleft", function () {
                    alert("确定跳转......");
                    window.location.href = "<?php echo url('../admin/admin/login'); ?>";
                });
            });

             </script>
             <script src="__JS__/bootstrap.min.js"></script>
             <script src="__JS__/main.js"></script>
             <script type="text/javascript">
             $(document).ready(function () {
                $(".hamburger").click(function () {
                    $(this).toggleClass("is-active");
                });


            });
             </script>
             <script type="text/javascript">
             var intervalCounter = 0;
             function hideToast() {
                var alert = document.getElementById("toast");
                alert.style.opacity = 0;
                clearInterval(intervalCounter);
            }
            function drawToast(message) {
                var alert = document.getElementById("toast");
                if (alert == null) {
                    var toastHTML = '<div id="toast" class="text-info">' + message + '</div>';
                    document.body.insertAdjacentHTML('beforeEnd', toastHTML);
                }
                else {
                    alert.style.opacity = .9;
                }
                intervalCounter = setInterval("hideToast()", 1000);
            }
            function save() {
                drawToast("向左滑动登录");
            }
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
