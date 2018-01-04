<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpstudy\WWW\tp5\public/../app/index\view\index\userinfo_update.html";i:1510413766;}*/ ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

  <title>用户修改</title>
  <link href="__CSS__/bootstrap.min.css" rel="stylesheet">
  <link href="__CSS__/font-awesome.min.css" rel="stylesheet">
  <link href="__CSS__/animate.min.css" rel="stylesheet">
  <link href="__CSS__/style.min.css" rel="stylesheet"><base target="_self">
  

</head>

<body class="gray-bg">

  <div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
      <div>

        <h1 class="logo-name">H+</h1>

      </div>
      <h3>修改H+</h3>
      <form method="post"  class="m-t"  action="userinfo_edit">
        <input value="<?php echo $data['id']; ?>" name="id" type="hidden">
        <div class="form-group">
          <input type="text"  value="<?php echo $data['username']; ?>" name="username" class="form-control" placeholder="请输入用户名" required="">
        </div>
        <div class="form-group">
          <input type="password" value="<?php echo $data['password']; ?>" name="password"  class="form-control" placeholder="请输入密码" required="">
        </div>
        <div class="form-group">
          <input type="password" value="<?php echo $data['password']; ?>" name="password" class="form-control" placeholder="请再次输入密码" required="">
        </div>
        <div class="form-group">
          <input type="email"
          class="form-control" name="email"
          placeholder="Email" value="<?php echo $data['email']; ?>"
          >
        </div>



        <div class="form-group">
          <label>
            <input type="radio" name="sex" id="optionsRadios1" value="1" checked>男
          </label>
          <label>
            <input type="radio" name="sex" id="optionsRadios2" value="2">女
          </label>
        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">确定修改</button>

        
      </form>
    </div>
  </div>
</body>

</html>