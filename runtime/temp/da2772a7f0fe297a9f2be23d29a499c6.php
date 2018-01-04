<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"D:\phpstudy\WWW\tp5\public/../app/index\view\index\manage.html";i:1510838374;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" name="toTop" content="true">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--定义设备-->
    <!--自跳转页面-->
    <title>公司治理-关于华为</title>
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
                <!--  <span><a href="<?php echo url('index/login'); ?>" target="_parent"><?php echo lang('登录'); ?></a>/<a href="<?php echo url('index/register'); ?>" target="_parent"><?php echo lang('注册'); ?></a></span> -->
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
        <a href="../index.html " target="_parent" class="navbar-brand"><img src="__img__/华为logo.png" class="img-responsive "></a>
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


<div class="container" style="margin-top:100px;">
    <ul class="list-unstyled list-inline">
        <li><a href=" <?php echo url('index/index'); ?>" target="_parent" class="text-info">首页</a></li>
        <span class="glyphicon glyphicon-menu-right 
        "></span>
        <li><a href="<?php echo url('index/introduction'); ?>" target="_parent" class="text-info">公司介绍</a></li>  <span class="glyphicon glyphicon-menu-right
        "></span>
        <li>公司治理</li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-9 m-left">
            <h3 class="m-h3">公司治理</h3>

            <div class="icon">
                <a href="##" class="z"></a>
                <a href="##" class="x"></a>
                <a href="##" class="c"></a>
                <a href="##" class="v"></a>
                <a href="##" class="b"></a>
                <a href="##" class="n"></a>
                <a href="##" class="m"></a>
                <a href="##" class="l"></a>
            </div>
            <div class="text-main">
                <img src="__img__/Corporate-Governance-cn.jpg" class="img-responsive">


                <p>股东会是公司最高权力机构，对公司增资、利润分配、选举董事/监事等重大事项作出决策。</p>

                <p>董事会是公司战略和经营管理的决策机构，对公司的整体业务运作进行指导和监督，对公司在战略和运作过程中的重大事项进行决策。 </p>

                <p>监事会主要职责包括内外合规监督，检查公司财务和公司经营状况，对董事、高级管理人员执行职务的行为和董事会运作规范性进行监督。</p>

                <p> 公司实行董事会领导下的轮值CEO制度，轮值CEO在轮值期间作为公司经营管理以及危机管理的最高责任人，对公司生存发展负责。</p>

                <p> 自2000年起，华为聘用毕马威作为独立审计师。审计师负责审计年度财务报表，根据会计准则和审计程序，评估财务报表是否真实和公允，对财务报表发表审计意见。</p>

                <p>公司设立基于客户、产品和区域三个纬度的组织架构，各相应组织共同为客户创造价值，对公司的财务绩效有效增长、市场竞争力提升和客户满意度负责。</p>
                <ul>
                    <li>
                        运营商BG和企业BG是公司分别面向运营商客户和企业/行业客户的解决方案营销、销售和服务的管理和支撑组织，针对不同客户的业务特点和经营规律提供创新、差异化、领先的解决方案，并不断提升公司的行业竞争力和客户满意度；消费者BG是公司面向终端产品用户的端到端经营组织，对经营结果、风险、市场竞争力和客户满意度负责。
                    </li>
                    <li>产品与解决方案是公司面向运营商及企业/行业客户提供ICT融合解决方案的组织，负责产品的规划、开发交付和产品竞争力构建，创造更好的用户体验，支持商业成功。</li>
                    <li>
                        区域组织是公司的区域经营中心，并负责位于区域的各项资源、能力的建设和有效利用。公司持续优化区域组织，加大、加快向一线组织授权，指挥权、现场决策权逐渐前移至代表处。在与客户建立更紧密的联系和伙伴关系、帮助客户实现商业成功的同时，进一步实现华为自身健康、可持续的有效增长。
                    </li>
                    <li>集团职能平台是聚焦业务的支撑、服务和监管的平台，向前方提供及时准确有效的服务，在充分向前方授权的同时，加强监管。</li>
                </ul>

            </div>
            <div class="icon">
                <a href="##" class="z"></a>
                <a href="##" class="x"></a>
                <a href="##" class="c"></a>
                <a href="##" class="v"></a>
                <a href="##" class="b"></a>
                <a href="##" class="n"></a>
                <a href="##" class="m"></a>
                <a href="##" class="l"></a>
            </div>
        </div>

        <div class="col-md-3  col-sm-3  visible-md visible-lg visible-sm">

            <h3 class="m-h3">公司治理</h3>
            <ul class="list-unstyled m-right">
                <a href="##" class="active">
                    <li>公司治理</li>
                </a>
                <a href="##">
                    <li>股东会和持股员工代表会</li>
                </a>
                <a href="##">
                    <li>董事会</li>
                </a>
                <a href="##">
                    <li>董事会专业委员会</li>
                </a>
                <a href="##">
                    <li>监事会</li>
                </a>
                <a href="##">
                    <li>轮值CEO</li>
                </a>
                <a href="##">
                    <li>独立审计师</li>
                </a>
                <a href="##">
                    <li>内部控制</li>
                </a>
            </ul>

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
