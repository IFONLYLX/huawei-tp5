<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpstudy\WWW\tp5\public/../app/admin\view\index\frame\pages\admin_update.html";i:1510838627;}*/ ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>admin修改</title>
  <link href="__CSS__/bootstrap.min.css" rel="stylesheet">
  <link href="__CSS__/font-awesome.min.css" rel="stylesheet">
  <link href="__CSS__/animate.min.css" rel="stylesheet">
  <link href="__CSS__/style.min.css" rel="stylesheet">
  <base target="_self">

</head>

<body class="gray-bg">

  <div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
      <div>

        <h1 class="logo-name">H+</h1>

      </div>
      <h3>修改H+</h3>
      <form method="post"  class="m-t"  action="admin_edit">
        <input value="<?php echo $data['id']; ?>" name="id" type="hidden">
        <div class="form-group">
          <input type="text"  value="<?php echo $data['name']; ?>" name="name" class="form-control" placeholder="请输入用户名" required="">
        </div>
        <div class="form-group">
          <input type="password" value="<?php echo $data['password']; ?>" name="password"  class="form-control" placeholder="请输入密码" required="">
        </div>
        <div class="form-group">
          <input type="password" value="<?php echo $data['password']; ?>" name="password" class="form-control" placeholder="请再次输入密码" required="">
        </div>
        
        <button type="submit" class="btn btn-primary block full-width m-b">确定修改</button>

        
      </form>
    </div>
  </div>
  <script src="__JS__/all/jquery-1.11.3.min.js"></script>
  <script src="__JS__/all/bootstrap.min.js"></script>
</body>

</html>