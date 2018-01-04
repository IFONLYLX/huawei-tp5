<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\phpstudy\WWW\tp4\public/../app/admin\view\index\frame\top.html";i:1510020674;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>无标题文档</title>
  <link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="__CSS__/admin.css">
</head>

<body>
  <div id="top">
   <img src="__img__/华为logo.png">
   <div class="top-main">
    <ul>
      <li><a href="user_list"  target="a2">搜索</a></li>
      <li><a href="user_list"  target="a2">消息</a></li>
      <li><a href="user_list"  target="a2">费用</a></li>
      <li><a href="user_list"  target="a2">工单</a></li>
      <li><a href="user_list"  target="a2">备单</a></li>
      <li><a href="user_list"  target="a2">支持</a></li>
      <li><a href="user_list"  target="a2">产品</a></li>
      <li><a href="##"  class="text-warning"><?php echo $value=session('name'); ?></a></li>
      <li><a href="<?php echo url('admin/logout'); ?>" target="_top" class="text-danger" >注销</a></li>
    </ul>

  </div>
</div>
</body>
</html>
