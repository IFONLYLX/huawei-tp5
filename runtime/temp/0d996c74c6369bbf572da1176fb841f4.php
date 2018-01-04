<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpstudy\WWW\tp5\public/../app/admin\view\index\frame\pages\news_update.html";i:1510838754;}*/ ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

  <title>新闻修改</title>
  <link href="__CSS__/bootstrap.min.css" rel="stylesheet">
  <link href="__CSS__/font-awesome.min.css" rel="stylesheet">
  <link href="__CSS__/animate.min.css" rel="stylesheet">
  <link href="__CSS__/style.min.css" rel="stylesheet">
  <base target="_self">
  <link rel="stylesheet" type="text/css" href="__CSS__/all/default.css">
  <script charset="utf-8" src="__JS__/all/kindeditor-min.js"></script>
  <script>
  var editor;
  KindEditor.ready(function(K) {
    editor = K.create('textarea[name="content"]', {
      allowFileManager : true
    });
    editor = K.create('textarea[name="contents"]', {
      allowFileManager : true
    });

  });
  </script>
</head>

<body class="gray-bg">

  <div>
    <div>

      <h1 class="logo-name">H+</h1>

    </div>
    <h3>修改H+</h3>
    <form method="post"  class="m-t"  action="news_edit">
     <table class="table table-bordered">

       <input value="<?php echo $data['id']; ?>" name="id" type="hidden">
       <tr>
        <td>标题:</td>
        <td><input value="<?php echo $data['title']; ?>"  class="form-control" type="text" name="title"></td>
      </tr>
      <tr>
        <td>标题id:</td>
        <td><input value="<?php echo $data['titleid']; ?>"  class="form-control" type="text" name="titleid"></td>
      </tr>
      <tr>
        <td>关键字:</td>
        <td><input value="<?php echo $data['keyword']; ?>"  class="form-control" type="text" name="keyword"></td>
      </tr>
      <tr>
        <td>作者:</td>
        <td><input value="<?php echo $data['author']; ?>"  class="form-control" type="text" name="author"></td>
      </tr>
      <tr>
        <td>内容:</td>
        <td>
          <input value="<?php echo $data['content']; ?>"  class="form-control" type="text">
          <textarea value="<?php echo $data['content']; ?>" class="form-control" cols="10" rows="5" name="content">

          </textarea>
        </td>
      </tr>
      <tr>
        <td>内容:</td>
        <td>
          <input value="<?php echo $data['contents']; ?>"  class="form-control" type="text">
          <textarea value="<?php echo $data['contents']; ?>" class="form-control" cols="10" rows="5" name="contents"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"><input class="btn btn-info btn-sm" type="submit" value="确定修改">
            <input  class="btn btn-info btn-sm" type="reset" value="重置"></td>
          </tr>

        </table>

      </form>
    </div>
    <script src="__JS__/all/jquery-1.11.3.min.js"></script>
    <script src="__JS__/all/bootstrap.min.js"></script>
    
  </body>

  </html>