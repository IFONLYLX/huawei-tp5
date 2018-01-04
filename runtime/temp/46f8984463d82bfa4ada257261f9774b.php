<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\phpstudy\WWW\tp5\public/../app/admin\view\index\frame\index.html";i:1511097776;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理员界面</title>
    <link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__CSS__/admin.css">
    <style>
    li ul li  a{
        text-align: left;
        margin-left:70px; 

    }
    </style>
</head>
<body>
    <div id="body">
        <div id="body-left">
            <div class="body-leftmain">
                <ul>
                    <li>
                       <p>
                        <a href="pages/index.html" target="a2" style="font-size:18px;margin-left:-30px;">控制台</a></p>
                    </li>
                    <li>
                        <a href="##">
                            <p class="t">
                             网站功能<span class="text-info pull-right glyphicon glyphicon-triangle-bottom"></span>
                         </p>
                     </a>
                     <ul class="u zz">
                        <li><a href="<?php echo url('admin/user_list'); ?>" target="a2">用户</a></li>
                        <li><a href="<?php echo url('admin/admin_list'); ?>" target="a2">管理员</a></li>
                        <li><a href="<?php echo url('news/news_list'); ?>" target="a2">新闻</a></li>
                        <li><a href="<?php echo url('upload/pic_list'); ?>" target="a2">图片</a></li>

                    </ul>
                </li>


                <li>
                    <a href="##">
                        <p class="t">
                         网站内容<span class=" text-info pull-right glyphicon glyphicon-triangle-bottom"></span>
                     </p>
                 </a>
                 <ul class="u cc">
                    <li><a href="pages/f-z.html" target="a2">图片</a></li>
                    <li><a href="pages/f-s.html" target="a2">视频</a></li>
                    <li><a href="pages/f-g.html" target="a2">文章类别</a></li>
                    <li><a href="pages/news/menu.php" target="a2">新闻</a></li>
                    <li><a href="pages/f-z.html" target="a2">导航栏</a></li>
                    <li><a href="pages/f-s.html" target="a2">广告内容</a></li>
                    <li><a href="pages/f-g.html" target="a2">视频播放器</a></li>
                    <li><a href="pages/footer/menu.php" target="a2">脚步链接</a></li>
                </ul>
            </li>
            <li>
                <a href="##">
                    <p class="t">
                        产品管理<span class="text-info pull-right glyphicon glyphicon-triangle-bottom"></span>
                    </p>
                </a>
                <ul class="u">
                    <li><a href="pages/f-z.html" target="a2">产品类别</a></li>
                    <li><a href="pages/f-s.html" target="a2">产品介绍</a></li>
                    <li><a href="pages/f-g.html" target="a2">产品图片</a></li>
                    <li><a href="pages/f-c.html" target="a2">产品价格</a></li>
                </ul>
            </li>
            <li>
                <a href="##">
                    <p class="t">
                     推广反馈<span class="text-info pull-right glyphicon glyphicon-triangle-bottom"></span>
                 </p>
             </a>
             <ul class="u">
                <li><a href="pages/f-z.html" target="a2">推广管理</a></li>
                <li><a href="pages/f-s.html" target="a2">推送消息管理</a></li>
                <li><a href="pages/f-g.html" target="a2">优惠券管理</a></li>
                <li><a href="pages/f-c.html" target="a2">优惠券验证</a></li>
                <li><a href="pages/f-c.html" target="a2">反馈</a></li>
                <li><a href="pages/news.php" target="a2">权限</a></li>
                <li><a href="pages/news.php" target="a2">文章</a></li>
                <li><a href="pages/news.php" target="a2">用户</a></li>
                <li><a href="pages/news.php" target="a2">评论</a></li>
            </ul>
        </li>
        <li>
            <a href="pages/more.html" target="a2">
                <p class="t">
                 更多应用<span class="text-info pull-right glyphicon glyphicon-triangle-bottom"></span>
             </p>
         </a>

     </li>
 </ul>
</div>
</div>

<div id="body-right">


</div>
</div>
<script src="__JS__/all/jquery-1.10.2.min.js"></script>
<script src="__JS__/admin.js"></script>
</body>
</html>
