<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\phpstudy\WWW\tp4\public/../app/admin\view\index\frame\pages\user_list.html";i:1510024071;}*/ ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户列表</title>

    <link rel="shortcut icon" href="__PUBLIC__/favicon.ico">
    <link href="__admin_css__/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="__admin_css__/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="__admin_css__/animate.min.css" rel="stylesheet">
    <link href="__admin_css__/style.min.css?v=4.0.0" rel="stylesheet"><base target="_self">

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
            <div class="wrapper wrapper-content">
                <div class="container-fluid ">
                    <div class="row">

                        <table  class="table table-striped table-bordered table-responsive">
                         <thead>
                             <th>

                                <td>用户名</td>
                                <td>密码</td>
                                <td>性别</td>
                                <td>注册时间</td>
                                <td>注册IP</td>
                            </th>
                        </thead>

                        <?php foreach($data as $value): ?>
                        <tr>
                            <td><?php echo $value['id']; ?></td>
                            <td><?php echo $value['username']; ?></td>
                            <td><?php echo $value['password']; ?></td>
                            <td><?php echo $value['sex']; ?></td>
                            <td><?php echo $value['create_time']; ?></td>
                            <td><?php echo $value['ip']; ?></td>
                        </tr> 
                        <?php endforeach; ?>
                    </table>

                    <div align="center" style="height:20px;"><?php echo $page; ?></div>

                    

                </div>
                <div class="row">
                    <div class="col-lg-8">

                    </div>
                    <div class="col-lg-4">

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-12">

                    </div>

                </div>

            </div>

        </div>
        <div class="footer">

        </div>
    </div>
</div>

<script src="__JS__/jquery-1.11.3.min.js"></script>
<script src="__JS__/bootstrap.min.js"></script>
</body>

</html>