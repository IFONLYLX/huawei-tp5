<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\phpstudy\WWW\tp5\public/../app/admin\view\index\frame\pages\pic_list.html";i:1510838765;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>图片管理</title>
    <link href="__CSS__/bootstrap.min.css" rel="stylesheet">
    <link href="__CSS__/font-awesome.min.css" rel="stylesheet">
    <link href="__CSS__/animate.min.css" rel="stylesheet">
    <link href="__CSS__/style.min.css" rel="stylesheet">
    <base target="_self">
    <style>
    img{

      transition: all 0.6s;
  }
  img:hover{
    transform: scale(5);
}
</style> 
</head>
<body class="gray-bg top-navigation">
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <i class="fa fa-reorder"></i>
                        </button>
                        <a href="#" class="navbar-brand">Hplus</a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a aria-expanded="false" role="button" href="<?php echo url('index/index'); ?>" target="_parent"> 返回首页</a>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> 菜单 <span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="">菜单列表</a>
                                    </li>
                                    <li><a href="">菜单列表</a>
                                    </li>
                                    <li><a href="">菜单列表</a>
                                    </li>
                                    <li><a href="">菜单列表</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> 菜单 <span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="">菜单列表</a>
                                    </li>
                                    <li><a href="">菜单列表</a>
                                    </li>
                                    <li><a href="">菜单列表</a>
                                    </li>
                                    <li><a href="">M菜单列表</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> 菜单 <span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="">菜单列表</a>
                                    </li>
                                    <li><a href="">菜单列表</a>
                                    </li>
                                    <li><a href="">菜单列表</a>
                                    </li>
                                    <li><a href="">菜单列表</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> 菜单 <span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="">菜单列表</a>
                                    </li>
                                    <li><a href="">菜单列表</a>
                                    </li>
                                    <li><a href="">菜单列表</a>
                                    </li>
                                    <li><a href="">菜单列表</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <ul class="list-unstyled">
                     <li><a class="J_menuItem" href="<?php echo url('index/pic_add'); ?>">添加图片</a>
                     </li>
                 </ul>

             </div>

         </div>

         <div class="wrapper wrapper-content">
            <div class="container-fluid ">
                <div class="row">

                    <table  class="table table-striped table-bordered table-responsive">
                     <thead>
                         <th>

                            <td>title</td>
                            <td>标记titleid</td>
                            <td>content</td>
                            <td>图片</td>
                            <td>描述</td>
                            <td>操作</td>

                        </th>
                    </thead>

                    <?php foreach($data as $value): ?>
                    <tr>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['title']; ?></td>
                        <td><?php echo $value['titleid']; ?></td>
                        <td><?php echo $value['content']; ?></td>
                        <td><?php echo $value['picurl']; ?> <img id = "imgTest" style="width:20px;height:20px;" src="__upload__/<?php echo $value['picurl']; ?>" class="img-circle"></td>
                        <td><?php echo $value['description']; ?></td>

                        <td><a class="btn btn-danger btn-xs" href="pic_delete?id=<?php echo $value['id']; ?>">删除</a>&nbsp<a class="btn btn-danger btn-xs" href="pic_update?id=<?php echo $value['id']; ?>">修改</a></td>
                    </tr> <?php endforeach; ?>
                </table>

                <div align="center" style="height:20px;"><?php echo $page; ?></div>

            </div>
        </div>

    </div>
    <div class="footer">

        <p class="text-center">版权所有©2016 华为科技有限公司 <a href="http://www.miitbeian.gov.cn/"> 粤A2-20044005号</a></p>

    </div>
</div>
</div>
<script src="__JS__/all/jquery-1.11.3.min.js"></script>
<script src="__JS__/all/bootstrap.min.js"></script>

</body>
</html>