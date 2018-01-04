<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\phpstudy\WWW\tp5\public/../app/index\view\index\user.html";i:1510886082;}*/ ?>
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
    <!--引入bootstrap css样式-->
    <link rel="stylesheet" type="text/css" href="__CSS__/index.css">
    <link rel="stylesheet" type="text/css" href="__CSS__iconfont.css">
    <script src="__JS__/all/angular.min.js"></script>
    <script src="__JS__/all/angular.city.js"></script>
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
            <?php
                   if ($value==null) {
                       echo '<span><a href="/tp5/public/index/index/login" target="_parent">登录</a>-';
                       echo '<a href="/tp5/public/index/index/register" target="_parent">注册</a></span>';
                   }else{
             
                    echo "<span><a href='userinfo?username=$value'  target='_parent'>个人信息</a>-";
                    echo '<a href="/tp5/public/index/user/logout.html" target="_parent">注销</a></span>';
                }
                ?>
            <span><a href="<?php echo url('../admin/admin/login'); ?>" target="_parent"><?php echo lang('后台'); ?></a></span>
        </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle hamburger" id="hamburger" data-toggle="collapse"
            data-target="#responsenav">

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

        </button>
        <a href="<?php echo url('index/index'); ?>" target="_parent" class="navbar-brand"><img src="__img__/华为logo.png" class="img-responsive"></a>
    </div>
    <div class="drop-toggle">
        <div class="collapse navbar-collapse" id="responsenav">
            <ul class="nav navbar-nav dropdown-list">

                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"></span>
                    我想<span class="caret"></span></a>
                    <ul class="dropdown-menu hidden-lg  hidden-md">

                        <li><a href="##">浏览智能手机</a></li>
                        <li><a href="##">购买手机产品</a></li>
                        <li><a href="##">获取技术支持</a></li>
                        <li><a href="##">查找销售门店</a></li>
                        <li><a href="##">访问消费者网站 ></a></li>

                        <li><a href="##">提交购买需求</a></li>
                        <li><a href="##">查看成功案例</a></li>
                        <li><a href="##">查找营销资料</a></li>
                        <li><a href="##">成为渠道合作伙伴</a></li>
                        <li><a href="##">访问企业业务网站 ></a></li>

                    </ul>
                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">个人及家电产品</a>

                    <ul class="dropdown-menu  hidden-lg  hidden-md">
                        <li><a href="##">智能手机</a></li>
                        <li><a href="##">笔记本&平板</a></li>
                        <li><a href="##">穿戴设备</a></li>
                        <li><a href="##">移动宽带</a></li>
                        <li><a href="##">智能家居</a></li>
                        <li><a href="##"> 配件</a></li>
                    </ul>
                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">商用解决方案</a>

                    <ul class="dropdown-menu  hidden-lg  hidden-md">
                        <p class=" text-danger">热点话题</p>
                        <li><a href="##">大视频</a></li>
                        <li><a href="##">大IT</a></li>
                        <li><a href="##">大运营</a></li>
                        <li><a href="##">大结构</a></li>
                        <li><a href="##">大管道</a></li>
                        <li><a href="##">软件定义网络(SDN)</a></li>
                        <li><a href="##">精简IT,敏捷商道</a></li>
                        <li><a href="##">物联网,驱动行业创新</a></li>
                        <p class="text-danger">行业</p>
                        <li><a href="##">公共安全</a></li>
                        <li><a href="##">政务</a></li>
                        <li><a href="##">轨道</a></li>
                        <li><a href="##">电力</a></li>
                        <li><a href="##">金融</a></li>
                        <li><a href="##">影音传媒</a></li>
                        <li><a href="##">教育</a></li>
                        <li><a href="##" class="lx">查看更多 ></a></li>
                        <p class="text-danger">企业产品及服务</p>

                        <li><a href="##">交换机</a></li>
                        <li><a href="##">路由器</a></li>
                        <li><a href="##">WLAN</a></li>
                        <li><a href="##">服务器</a></li>
                        <li><a href="##">存储</a></li>
                        <li><a href="##">云计算</a></li>
                        <li><a href="##">网络能源</a></li>
                        <li><a href="##">服务创新</a></li>
                        <li><a href="##" class="lx">查看更多 ></a></li>
                    </ul>


                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">技术支持</a>
                    <ul class="dropdown-menu  hidden-lg  hidden-md">
                        <p class="text-danger">消费者</p>
                        <li><a href="##">寄修服务</a></li>
                        <li><a href="##">预约服务</a></li>
                        <li><a href="##">保修状态查询</a></li>
                        <li><a href="##">保修政策</a></li>
                        <li><a href="##">花粉俱乐部</a></li>
                        <li><a href="##">服务中心</a></li>
                        <li><a href="##">升级软件应用</a></li>
                        <li><a href="##" class="lx">查看更多 ></a></li>
                        <p class="text-danger">企业用户</p>
                        <li><a href="##">技术支持</a></li>
                        <li><a href="##">软件下载</a></li>
                        <li><a href="##">互动社区</a></li>
                        <li><a href="##">工具</a></li>
                        <li><a href="##">文档查找</a></li>
                        <li><a href="##">案例库</a></li>
                        <li><a href="##">华为培训与认证</a></li>
                        <li><a href="##" class="lx">查看更多 ></a></li>
                        <p class="text-danger">运营商用户</p>

                        <li><a href="##">技术支持</a></li>
                        <li><a href="##">软件下载</a></li>
                        <li><a href="##">工具</a></li>
                        <li><a href="##">知识库</a></li>
                        <li><a href="##">公告</a></li>
                        <li><a href="##">互动社区</a></li>
                        <li><a href="##">智能问答</a></li>
                        <li><a href="##" class="lx">查看更多 ></a></li>


                    </ul>


                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">合作伙伴</a>

                    <ul class="dropdown-menu  hidden-lg  hidden-md">
                        <p class="text-danger">合作伙伴计划</p>
                        <li><a href="##">渠道伙伴政策</a></li>
                        <li><a href="##">华为技术认证</a></li>
                        <li><a href="##">企业业务解决方案伙伴计划</a></li>
                        <li><a href="##">运营商解决方案伙伴计划</a></li>
                        <li><a href="##">服务合作伙伴计划</a></li>
                        <p class="text-danger">合作伙伴展示</p>
                        <li><a href="##">渠道伙伴</a></li>
                        <li><a href="##">联盟伙伴</a></li>
                        <li><a href="##">Marketplace</a></li>
                        <li><a href="##">兼容性列表</a></li>
                        <p class="text-danger">联系合作伙伴</p>
                        <li><a href="##">查找经销商</a></li>
                        <li><a href="##">查找服务商</a></li>
                        <li><a href="##">查找解决方案伙伴</a></li>


                    </ul>

                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">开发者</a></li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">华为商城</a></li>
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


           <div id="dw" class="dropmenu-down" style="z-index:999;">
            <div class="dropmenu">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="__img__/nav/phone_1.png">
                            </div>
                            <div class="col-sm-9">
                                <ul class="list-unstyled">
                                    <li><a href="##">浏览智能手机</a></li>
                                    <li><a href="##">购买手机产品</a></li>
                                    <li><a href="##">获取技术支持</a></li>
                                    <li><a href="##">查找销售门店</a></li>
                                    <li><a href="##">访问消费者网站 ></a></li>

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
                                    <li><a href="##">提交购买需求</a></li>
                                    <li><a href="##">查看成功案例</a></li>
                                    <li><a href="##">查找营销资料</a></li>
                                    <li><a href="##">成为渠道合作伙伴</a></li>
                                    <li><a href="##">访问企业业务网站 ></a></li>
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
                                    <li><a href="##">了解行业热点</a></li>
                                    <li><a href="##">了解运营商解决方案</a></li>
                                    <li><a href="##">查找运营商相关产品</a></li>
                                    <li><a href="##">了解运营商服务</a></li>
                                    <li><a href="##">访问运营商业务网站 </a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-3">
                        <div class="row">
                            <ul class="list-unstyled">
                                <li><a href="##">联系华为</a></li>
                                <li><a href="##">了解管理团队</a></li>
                                <li><a href="##">关注华为动态</a></li>
                                <li><a href="##">加入华为</a></li>
                                <li><a href="##">在线反馈 </a></li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="dropmenu">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="##">
                            <p>智能手机</p>
                            <img src="__img__/nav/phone_1.png">
                            <h4>HUAWEI Mate 9</h4></a>

                            <a href="##" class="lx">查看更多 ></a>

                        </div>
                        <div class="col-sm-2">
                            <a href="##">
                                <p>笔记本 & 平板 </p>
                                <img src="__img__/nav/dropmenu2.png">
                                <h4>MateBook</h4>
                            </a>
                            <a href="##" class="lx">查看更多 ></a>

                        </div>
                        <div class="col-sm-2">
                            <a href="##">
                                <p>穿戴设备</p>
                                <img src="__img__/nav/dropmenu3.png">
                                <h4>TalkBand B3</h4>
                            </a>
                            <a href="##" class="lx">查看更多 ></a>

                        </div>
                        <div class="col-sm-2">
                            <a href="##">
                                <p>移动宽带</p>
                                <img src="__img__/nav/dropmenu4.png">
                                <h4>随行WIFI Plus</h4>
                            </a>
                            <a href="##" class="lx">查看更多 ></a>

                        </div>
                        <div class="col-sm-2">
                            <a href="##">
                                <p>智能家居</p>
                                <img src="__img__/nav/dropmenu5.png">
                                <h4>华为路由器Q1</h4>
                            </a>
                            <a href="##" class="lx">查看更多 ></a>

                        </div>
                        <div class="col-sm-2">
                            <a href="##">
                                <p>配件</p>
                                <img src="__img__/nav/dropmenu6.png" style="margin-left:45px;">
                                <h4>VR眼镜</h4>
                            </a>
                            <a href="##" class="lx">查看更多 ></a>

                        </div>

                    </div>

                </div>

                <div class="dropmenu">
                    <div class="row dropmenu-list3">
                        <div class="col-sm-2">
                            <p class=" text-left">热点话题</p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##">大视频</a></li>
                                <li><a href="##">大IT</a></li>
                                <li><a href="##">大运营</a></li>
                                <li><a href="##">大结构</a></li>
                                <li><a href="##">大管道</a></li>
                                <li><a href="##">软件定义网络(SDN)</a></li>
                                <li><a href="##">精简IT,敏捷商道</a></li>
                                <li><a href="##">物联网,驱动行业创新</a></li>

                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left">行业</p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##">公共安全</a></li>
                                <li><a href="##">政务</a></li>
                                <li><a href="##">轨道</a></li>
                                <li><a href="##">电力</a></li>
                                <li><a href="##">金融</a></li>
                                <li><a href="##">影音传媒</a></li>
                                <li><a href="##">教育</a></li>
                                <li><a href="##" class="lx">查看更多 ></a></li>
                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left">企业产品及服务</p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##">交换机</a></li>
                                <li><a href="##">路由器</a></li>
                                <li><a href="##">WLAN</a></li>
                                <li><a href="##">服务器</a></li>
                                <li><a href="##">存储</a></li>
                                <li><a href="##">云计算</a></li>
                                <li><a href="##">网络能源</a></li>
                                <li><a href="##">服务创新</a></li>
                                <li><a href="##" class="lx">查看更多 ></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left">运营商产品及服务</p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##">无线网络</a></li>
                                <li><a href="##">固定网络</a></li>
                                <li><a href="##">云核心网</a></li>
                                <li><a href="##">电信软件</a></li>
                                <li><a href="##">IT基础设施</a></li>
                                <li><a href="##">网络能源</a></li>
                                <li><a href="##">全球服务</a></li>
                                <li><a href="##" class="lx">查看更多 ></a></li>
                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p>其他产品</p>

                            <p><a href="##">智能光伏</a></p>

                        </div>


                    </div>

                </div>
                <div class="dropmenu">
                    <div class="row dropmenu-list4">
                        <div class="col-sm-2">
                            <p class=" text-left">消费者</p>
                            <ul class="list-unstyled  text-left">

                                <li><a href="##">寄修服务</a></li>
                                <li><a href="##">预约服务</a></li>
                                <li><a href="##">保修状态查询</a></li>
                                <li><a href="##">保修政策</a></li>
                                <li><a href="##">花粉俱乐部</a></li>
                                <li><a href="##">服务中心</a></li>
                                <li><a href="##">升级软件应用</a></li>
                                <li><a href="##" class="lx">查看更多 ></a></li>
                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left">企业用户</p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##">技术支持</a></li>
                                <li><a href="##">软件下载</a></li>
                                <li><a href="##">互动社区</a></li>
                                <li><a href="##">工具</a></li>
                                <li><a href="##">文档查找</a></li>
                                <li><a href="##">案例库</a></li>
                                <li><a href="##">华为培训与认证</a></li>
                                <li><a href="##" class="lx">查看更多 ></a></li>
                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left">运营商用户</p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##">技术支持</a></li>
                                <li><a href="##">软件下载</a></li>
                                <li><a href="##">工具</a></li>
                                <li><a href="##">知识库</a></li>
                                <li><a href="##">公告</a></li>
                                <li><a href="##">互动社区</a></li>
                                <li><a href="##">智能问答</a></li>
                                <li><a href="##" class="lx">查看更多 ></a></li>
                            </ul>
                        </div>

                        <div class="col-sm-2">
                            <img src="__img__/nav/group_nav_support.jpg" class="img-responsive">

                            <div>在线技术支持、软件下载、文档共享，无论您遇到任何问题，我们都将随时为您提供服务。</div>

                        </div>


                    </div>

                </div>

                <div class="dropmenu">
                    <div class="row dropmenu-list3 dropmenu-list5">
                        <div class="col-sm-2">
                            <p class=" text-left">合作伙伴计划</p>
                            <ul class="list-unstyled  text-left">

                                <li><a href="##">渠道伙伴政策</a></li>
                                <li><a href="##">华为技术认证</a></li>
                                <li><a href="##">企业业务解决方案伙伴计划</a></li>
                                <li><a href="##">运营商解决方案伙伴计划</a></li>
                                <li><a href="##">服务合作伙伴计划</a></li>

                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left">合作伙伴展示</p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##">渠道伙伴</a></li>
                                <li><a href="##">联盟伙伴</a></li>
                                <li><a href="##">Marketplace</a></li>
                                <li><a href="##">兼容性列表</a></li>
                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left">联系合作伙伴</p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##">查找经销商</a></li>
                                <li><a href="##">查找服务商</a></li>
                                <li><a href="##">查找解决方案伙伴</a></li>
                            </ul>

                        </div>
                        <div class="col-sm-2">
                            <p class=" text-left">获取资源</p>
                            <ul class="list-unstyled  text-left">
                                <li><a href="##">合作伙伴大学</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-2">
                            <p class="text-left"><span class="glyphicon glyphicon-user"></span>渠道伙伴系统登录</p>

                            <p class="text-left"><span class="glyphicon glyphicon-lock"></span> 解决方案伙伴系统登录</p>

                            <p class="text-left"><span class="glyphicon glyphicon-cloud"></span> 企业用户合作伙伴门户</p>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>
</nav>

</div>

<!--首页滚动图片-->
<div id="theCarousel" class="carousel slide" data-ride="carousel" style="margin-top:80px;">
    <ol class="carousel-indicators">
        <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#theCarousel" data-slide-to="1"></li>
        <li data-target="#theCarousel" data-slide-to="2"></li>
        <li data-target="#theCarousel" data-slide-to="3"></li>
        <li data-target="#theCarousel" data-slide-to="4"></li>
    </ol>


    <div class="carousel-inner">

        <div class="item active">
            <img src="__img__/user/1.jpg">
        </div>
        <div class="item">
            <img src="__img__/user/2.jpg">
        </div>


        <div class="item">
            <img src="__img__/user/3.jpg">

        </div>
        <div class="item">
            <img src="__img__/user/4.jpg">

        </div>
        <div class="item">
            <img src="__img__/user/5.jpg">

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

<div class="container-fluid user-container">
    <div class="row user-container-row">
        <div class="col-sm-6"><img src="__img__/user/list/1.jpg" class="img-responsive"></div>
        <div class="col-sm-6"><img src="__img__/user/list/2.jpg" class="img-responsive"></div>
        <div class="col-sm-6"><img src="__img__/user/list/3.jpg" class="img-responsive"></div>
        <div class="col-sm-6"><img src="__img__/user/list/4.jpg" class="img-responsive"></div>
    </div>

</div>
<div class="user-container-select">
    <div class="container text-center">
        <h3 class="text-white">寻找华为</h3>
        <ul class="list-unstyled">
            <li>
                <em>478</em><br>
                体验店
            </li>
            <li>
                <em>10000+</em><br>
                销售门店
            </li>
            <li>
                <em>896</em><br>
                用户服务中心

            </li>
        </ul>
    </div>

  <div class="container" ng-app="myApp" ng-controller="firstController">

    <form name="myForm" class="form-group container"> 

        <div class="form-group">
            <div  class="items col-sm-3">
                <select ng-change="data.area = false" class="form-control" ng-model="data.province" ng-options="x.id as x.name for x in cities | cityfil:0"></select>

            </div>
            <div  class="items col-sm-3">
                <select class="form-control"  ng-model="data.area" ng-options="x.id as x.name for x in cities | cityfil:data.province"></select>

            </div>

            <div  class=" items col-sm-3">
                <select class="form-control"  ng-model="data.areas" ng-options="x.id as x.name for x in cities | cityfil:data.area"></select>

            </div>
        </div>
         <div class="text-center th">
                <input type="button" value="查找零售商店">或
                <input type="button" value="查找服务中心">
            </div>
    </form> 

</div>
   
    <p class="h4 text-white text-center">联系我们</p>

    <div class="col-sm-12 text-center user-phone">
        <div class="text-white">400-830-8300 / 800-830-8300（座机）</div>

        <div class="text-white">普通话 7*24小时</div>
    </div>
    <div class=" container user-container-ul-bg">
        <div class="col-md-12">
            <ul class="list-unstyled text-center">
                <li class="con1 text-center">
                    <a class="center-block"></a>

                    <p>
                        <span>400-830-8300 / 800-830-8300（座机）</span>
                        <br>
                        <span>普通话 7*24小时</span>
                    </p>

                </li>

                <li class="con2"><a class="center-block"></a></li>

                <li class="con3"><a class="center-block"
                    href="http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&configID=37&policyId=1&location=B_001&chatfrom=web&enterurl=http://consumer.huawei.com/cn/support/index.htm&pagereferrer=http://consumer.huawei.com/cn/support/index.htm"></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid user-footer">
    <div class="user-left-img  hidden-xs hidden-sm">
        <div id="user-footer-left-img" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <a href="##"><img src="__img__/user/slide/left/1.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/left/2.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/left/3.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/left/4.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/left/5.jpg" class="img-responsive"></a>
                    <a href="##"><img src=".__img__/user/slide/left/6.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/left/7.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/left/8.jpg" class="img-responsive"></a>
                </div>
                <div class="item">
                    <a href="##"><img src="__img__/user/slide/left/9.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/left/10.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/left/11.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/left/12.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/left/13.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/left/14.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/left/15.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/left/16.jpg" class="img-responsive"></a>
                </div>
                <div class="item">
                    <a href="##"><img src="__img__/user/slide/left/17.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/left/18.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/left/19.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/left/20.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/left/17.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/left/18.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/left/19.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/left/20.jpg" class="img-responsive"></a>
                </div>

            </div>

            <a class="left carousel-control" href="#user-footer-left-img" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

            <a class="right carousel-control" href="#user-footer-left-img" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>

    </div>
    <div class="user-right-img  hidden-xs hidden-sm">
        <div id="user-footer-right-img" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <a href="##" class="user-list"><img src="__img__/user/slide/right/1.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/right/2.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/right/3.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/right/4.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/right/5.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/right/6.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/right/7.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/right/8.jpg" class="img-responsive"></a>
                </div>
                <div class="item">
                    <a href="##"> <img src="__img__/user/slide/right/9.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/right/10.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/right/11.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/right/12.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/right/13.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/right/14.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/right/15.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/right/16.jpg" class="img-responsive"></a>
                </div>
                <div class="item">
                    <a href="##"><img src="__img__/user/slide/right/17.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/right/18.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/right/19.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/right/20.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/right/17.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/right/18.jpg" class="img-responsive"></a>
                    <a href="##"> <img src="__img__/user/slide/right/19.jpg" class="img-responsive"></a>
                    <a href="##"><img src="__img__/user/slide/right/20.jpg" class="img-responsive"></a>
                </div>


            </div>

            <a class="left carousel-control" href="#user-footer-right-img" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

            <a class="right carousel-control" href="#user-footer-right-img" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>

    </div>
    <!--底部导航-->
    <div class="panel-footer">
        <div class="container-fluid">
            <div class="col-md-8 col-sm-12 hidden-xs">
                <div class="col-md-2  col-sm-2">
                    <label> 购买产品</label>

                    <ul class="list-unstyled xs-nav ">
                        <li><a href="##">智能手机</a></li>
                        <li><a href="##">笔记本&amp;平板</a></li>
                        <li><a href="##">智能穿戴</a></li>
                        <li><a href="##">智能家居</a></li>
                        <li><a href="##">移动宽带</a></li>
                        <li><a href="##">配件</a></li>

                    </ul>
                </div>
                <div class="col-md-2  col-sm-2">
                    <label>购物支持</label>
                    <ul class="list-unstyled  xs-nav">
                        <li><a href="##">购买指南</a></li>
                        <li><a href="##">快捷支付</a></li>
                        <li><a href="##">配送范围与费用</a></li>
                        <li><a href="##">查询指南</a></li>
                        <li><a href="##">实名认证</a></li>
                    </ul>

                </div>
                <div class="col-md-2  col-sm-2">
                    <label>服务与支持</label>
                    <ul class="list-unstyled  xs-nav">
                        <li><a href="##">保修政策</a></li>
                        <li><a href="##">退换货政策</a></li>
                        <li><a href="##">物流查询</a></li>
                        <li><a href="##">预约服务</a></li>
                        <li><a href="##">寄修服务</a></li>
                        <li><a href="##">手册与下载 </a></li>
                        <li><a href="##">预置应用公示</a></li>
                        <li><a href="##">花粉俱乐部</a></li>

                    </ul>


                </div>
                <div class="col-md-2  col-sm-2">
                    <label>关于我们</label>
                    <ul class="list-unstyled  xs-nav">
                        <li><a href="##">关于我们</a></li>
                        <li><a href="<?php echo url('index/mall'); ?>" target="_parent">华为商城</a></li>
                        <li><a href="##">企业业务</a></li>
                        <li><a href="##">运营商网络</a></li>
                        <li><a href="##">华为海洋</a></li>
                        <li><a href="##">华为集团</a></li>
                        <li><a href="##">加入华为</a></li>

                    </ul>


                </div>
                <div class="col-md-2  col-sm-2">
                    <label>新闻中心</label>
                    <ul class="list-unstyled  xs-nav">
                        <li><a href="<?php echo url('index/news'); ?>" target="_parent">华为新闻</a></li>
                        <li><a href="##">媒体报道</a></li>
                        <li><a href="##">华为视频</a></li>

                    </ul>


                </div>
            </div>

            <div class="col-md-4 huafen">
                <div class="imglinks pull-left">
                    <div class="col-md-12">
                        <h5 class="text-white">访问花粉俱乐部</h5>
                        <a href="##" class="user-fangwen"></a>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h5 class="text-white">关注我们</h5>
                            <a href="##" class="weixin pull-left">
                                <i class="user-weixin-hover"></i>
                                <span class="user-weixin"></span>

                            </a>
                            <a href="##" class="weibo pull-right"><i></i>
                            </a>

                        </div>
                        <div class="col-md-6">
                            <h5 class="text-white">关注花粉俱乐部</h5>
                            <a href="##" class="weixin pull-left">
                                <i></i>
                                <span class="user-ghuanzzhuweixin"></span>
                            </a>
                            <a href="##" class="weibo pull-right">
                                <i></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-xs-12 visible-xs">
                <div class="col-sm-3 navbar">
                    <label class="navbar-toggle pull-left" data-toggle="collapse" data-target="#f">
                        购买产品<span class="caret"></span>

                    </label>

                    <div class="collapse navbar-collapse col-xs-12" id="f">
                        <ul class="nav navbar-nav">
                            <li><a href="##">智能手机</a></li>
                            <li><a href="##">笔记本&amp;平板</a></li>
                            <li><a href="##">智能穿戴</a></li>
                            <li><a href="##">智能家居</a></li>
                            <li><a href="##">移动宽带</a></li>
                            <li><a href="##">配件</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 navbar">
                    <label class="navbar-toggle pull-left" data-toggle="collapse" data-target="#d">
                        购物支持<span class="caret"></span>

                    </label>

                    <div class="collapse navbar-collapse  col-xs-12" id="d">
                        <ul class=" nav navbar-nav ">
                            <li><a href="##">购买指南</a></li>
                            <li><a href="##">快捷支付</a></li>
                            <li><a href="##">配送范围与费用</a></li>
                            <li><a href="##">查询指南</a></li>
                            <li><a href="##">实名认证</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 navbar">
                    <label class="navbar-toggle pull-left" data-toggle="collapse" data-target="#g">
                        服务与支持<span class="caret"></span>

                    </label>

                    <div class="collapse navbar-collapse  col-xs-12" id="g">
                        <ul class=" nav navbar-nav ">
                            <li><a href="##">保修政策</a></li>
                            <li><a href="##">退换货政策</a></li>
                            <li><a href="##">物流查询</a></li>
                            <li><a href="##">预约服务</a></li>
                            <li><a href="##">寄修服务</a></li>
                            <li><a href="##">手册与下载 </a></li>
                            <li><a href="##">预置应用公示</a></li>
                            <li><a href="##">花粉俱乐部</a></li>


                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 navbar">
                    <label class="navbar-toggle pull-left" data-toggle="collapse" data-target="#s">
                        关于我们<span class="caret"></span>

                    </label>

                    <div class="collapse navbar-collapse  col-xs-12" id="s">
                        <ul class=" nav navbar-nav ">
                            <li><a href="##">关于我们</a></li>
                            <li><a href="<?php echo url('index/mall'); ?>" target="_parent">华为商城</a></li>
                            <li><a href="##">企业业务</a></li>
                            <li><a href="##">运营商网络</a></li>
                            <li><a href="##">华为海洋</a></li>
                            <li><a href="##">华为集团</a></li>
                            <li><a href="##">加入华为</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 navbar">
                    <label class="navbar-toggle pull-left" data-toggle="collapse" data-target="#a">
                        新闻中心<span class="caret"></span>

                    </label>

                    <div class="collapse navbar-collapse  col-xs-12" id="a">
                        <ul class=" nav navbar-nav ">
                            <li><a href="<?php echo url('index/news'); ?>" target="_parent">华为新闻</a></li>
                            <li><a href="##">媒体报道</a></li>
                            <li><a href="##">华为视频</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<div class="container-fluid modal-footer user-modal-footer" style="border-top:1px solid #aaaaaa;">
    <div class="col-xs-12">
        <div class="span text-left ">
            <span><a href="#">网站地图</a></span>
            <span><a href="#">联系我们</a></span>
            <span><a href="#">版权申明</a></span>
            <span><a href="#">法律声明</a></span>
            <span><a href="#">隐私政策</a></span>
            <span class="footer-new text-right pull-right">©2017 华为科技有限公司 <a href="http://www.miitbeian.gov.cn/">
                粤A2-20044005号</a><a href="http://consumer.huawei.com/cn/worldwide/index.htm"
                class="cbg-icon-flag cbg-icon-flag-china" title="选择语言/地区">中国<i style="color:red;" class=" iconfont icon-xiaoguoqi"></i></a></span>

            </div>
        </div>

    </div>
    <script src="__JS__/all/jquery-1.11.3.min.js"></script>
   
    <script src="__JS__/all/bootstrap.min.js"></script>

    <script src="__JS__/main.js"></script>
    <script src="__JS__/iconfont.js"></script>
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
