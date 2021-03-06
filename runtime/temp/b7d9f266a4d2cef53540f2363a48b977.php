<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\phpstudy\WWW\tp5\public/../app/index\view\index\introduction.html";i:1510886020;}*/ ?>
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

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="pull-right">
                    <div id="nav-main" class="nav-main-top">
                      <input type="hidden" value="<?php echo $value=session('username'); ?>">
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
        <a href="<?php echo url('index/index'); ?>" target="_parent" class="navbar-brand"><img src="__img__/华为logo.png"
          class="img-responsive"></a>
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
</div>
</nav>


</div>
<div class="container" style="margin-top:100px;">
    <ul class="list-unstyled list-inline">
        <li><a href="<?php echo url('index/index'); ?>" target="_parent" class="text-info">首页</a></li>
        <span class="glyphicon glyphicon-menu-right"></span>
        <li>公司介绍</li>
    </ul>
</div>
<div class="container">
    <h3 class="m-h3">公司介绍</h3>

    <div class="col-md-5  col-sm-12 col-xs-12 i-video">
        <div class="panel panel-body">
            <video width="100%" height="100%" poster="__img__/in-video.JPG" controls autoplay>
                <source src="__img__/video/huawei-in.mp4" type="video/mp4">
                    <source src="__img__video/huawei-in.flv" type="video/flv">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </div>
            <div class="col-sm-12 i-p">
                <h3>公司介绍</h3>
                <h4> 华为是谁?</h4>

                <p>华为是全球领先的信息与通信技术(ICT)解决方案供应商，专注于ICT领域，坚持稳健经营、持
                    续创新、开放合作，在电信运营商、企业、终端和云计算等领域构筑了
                    端到端的解决方案优势，为运营商客户、企业客户和消费者提供有竞争力的ICT解决方案
                    、产品和服务，并致力于使能未来信息社会、构建更美好的全联接世界。目前，华为有17万多
                    名员工，业务遍及全球170多个国家和地区，服务全世界三分之一以上的人口。</p>

                    <div class="more"><span class="glyphicon glyphicon-plus"></span><a href="##">了解更多</a></div>
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

            </div>
            <div class="container-fluid i-f">
                <div class="container">
                    <h3 class="text-center">华为2016年年报 </h3>

                    <div class="row">
                        <div class="col-md-4">
                            <dl class="text-center">
                                <dt><img src="__img__/links/abouthuawei002.png"></dt>
                                <h4> 销售收入 </h4>
                            </dl>
                        </div>
                        <div class="col-md-4">
                            <dl class="text-center">
                                <dt><img src="__img__/links/abouthuawei003.png"></dt>
                                <h4> 净利润</h4>
                            </dl>
                        </div>
                        <div class="col-md-4">
                            <dl class="text-center">
                                <dt><img src="__img__/links/abouthuawei004cn.png"></dt>
                                <h4>经营活动现金流</h4>
                            </dl>
                        </div>
                    </div>
                    <div class="pull-right"><span class="glyphicon  glyphicon-menu-right"></span><a href="##">更多</a></div>
                </div>

            </div>
            <div class="container-fluid i-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="##"><h3 class="visible-xs">价值主张</h3></a>

                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="__img__/links/价值主张.jpg" class="img-responsive">
                                </div>
                                <div class="col-sm-7">
                                    <a href="##"><h3 class="hidden-xs">价值主张</h3></a>

                                    <p>为适应信息行业正在发生的革命性变化，华为围绕客户需求和技术领先持续创新，与业界伙伴开放合作，聚焦构筑面向未来的信息管道，持续为客户和全社会创造价值。</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="##"><h3 class="visible-xs">财务概要</h3></a>

                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="__img__/links/财务概要.jpg" class="img-responsive">
                                </div>
                                <div class="col-sm-7">
                                    <a href="##"><h3 class="hidden-xs">财务概要</h3></a>

                                    <p>
                                        华为2015年年报显示，华为运营商、企业、终端三大业务在2014年的基础上持续有效增长，实现全球销售收入3950亿元人民币（608亿美元），同比增长37%；净利润369亿元人民币（57亿美元），同比增长33%。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="##"><h3 class="visible-xs"> 公司治理 </h3></a>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <img src="__img__/links/公司治理.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">

                                        <a href="##"><h3 class="hidden-xs"> 公司治理 </h3></a>

                                        <p>公司坚持以客户为中心、以奋斗者为本，持续改善公司治理架构、组织、流程和考核，使公司长期保持有效增长。</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a href="##"><h3 class="visible-xs"> 研究开发</h3></a>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <img src="__img__/links/研究开发.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">

                                        <a href="##"><h3 class="hidden-xs"> 研究开发</h3></a>

                                        <p>
                                            华为聚焦ICT管道战略，为实现更好的全联接世界，在关键技术、基础工程能力、架构、标准和产品开发等方向持续投入，致力于用更宽、更智能、更高性能、更可靠的“零”等待管道，为用户创造更好的体验。</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="##"><h3 class="visible-xs"> 开放合作共赢 </h3></a>

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img src="__img__/links/核心价值观.jpg" class="img-responsive">
                                        </div>
                                        <div class="col-sm-7">

                                            <a href="##"><h3 class="hidden-xs"> 开放合作共赢 </h3></a>

                                            <p>华为把“开放、合作、共赢”作为企业发展的重要基石，致力于为全联接的信息社会打造良性生态系统。</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <a href="##"><h3 class="visible-xs">网络安全 </h3></a>

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img src="__img__/links/网络安全.jpg" class="img-responsive">
                                        </div>
                                        <div class="col-sm-7">

                                            <a href="##"><h3 class="hidden-xs">网络安全 </h3></a>

                                            <p>
                                                华为将构筑并全面实施端到端的全球网络安全保障体系作为公司的重要发展战略之一。网络安全是一个全球性挑战，只有通过供应商、客户和政策与法律制定者之间的全球合作，才能在应对全球网络安全挑战方面取得显著成绩。</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="##"><h3 class="visible-xs"> 发展历程</h3></a>

                                        <div class="row">
                                            <div class="col-sm-5">
                                                <img src="__img__/links/发展历程.jpg" class="img-responsive">
                                            </div>
                                            <div class="col-sm-7">

                                                <a href="##"><h3 class="hidden-xs"> 发展历程</h3></a>

                                                <p>
                                                    华为于1987年成立于中国深圳。在20多年的时间里，华为全体员工付出艰苦卓越的努力，以开放的姿态参与到全球化的经济竞合中，逐步发展成一家业务遍及全球170多个国家和地区的全球化公司。</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="##"><h3 class="visible-xs"> 质量方针 </h3></a>

                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <img src="__img__/links/质量方针.jpg" class="img-responsive">
                                                </div>
                                                <div class="col-sm-7">

                                                    <a href="##"><h3 class="hidden-xs"> 质量方针 </h3></a>

                                                    <p>积极倾听客户需求,精心构建产品质量,真诚提供满意服务,时刻铭记为客户服务是我们存在的唯一理由。</p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--底部导航-->
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
