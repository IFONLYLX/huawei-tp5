<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\phpstudy\WWW\tp4\public/../app/admin\view\index\frame\pages\news_add.html";i:1510024025;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <title>新闻添加</title>
  <link rel="shortcut icon" href="__PUBLIC__/favicon.ico">
  <!--自定义图标-->
  <link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.min.css">
  <!--引入bootstrap css样式-->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> 
  </head>
  <body>
    <div class="col-sm-12 text-center">

      <h3>发布新闻</h3>

      <form  class="form-horizontal" action="<?php echo url('news/news_add'); ?>" method="post">
        <div class="table-responsive">
          <table class="table table-bordered">

           <tr>
            <td>标题:</td>
            <td><input  class="form-control" type="text" name="title"></td>
          </tr>
           <tr>
            <td>标题id:</td>
            <td><input  class="form-control" type="text" name="titleid"></td>
          </tr>
          <tr>
            <td>关键字:</td>
            <td><input  class="form-control" type="text" name="keyword"></td>
          </tr>
          <tr>
            <td>作者:</td>
            <td><input  class="form-control" type="text" name="author"></td>
          </tr>
          <tr>
            <td>内容:</td>
            <td><textarea class="form-control" cols="10" rows="5" name="content"></textarea></td>
          </tr>
          <tr>
            <td>内容详情:</td>
            <td><textarea class="form-control" cols="10" rows="5" name="contents"></textarea></td>
          </tr>
          <tr>
            <td colspan="2"><input class="btn btn-info btn-sm" type="submit" value="添加">
              <input  class="btn btn-info btn-sm" type="reset" value="重置"></td>
            </tr>

          </table>

        </form>
      </div>
    </div>



    <script>
    function key() {
      if (event.keyCode == 13) {

        event.returnValue = false;
        event.cancle = true;
        loginform.submit.click();

      }

    }

    </script>

  </body>
  </html>