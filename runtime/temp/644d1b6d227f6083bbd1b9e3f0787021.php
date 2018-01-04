<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpstudy\WWW\tp5\public/../app/admin\view\index\frame\pages\pic_update.html";i:1510838799;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <title>图片上传</title>
  <link rel="shortcut icon" href="__PUBLIC__/favicon.ico">
  <!--自定义图标-->
  <link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.min.css">
  <link href="__CSS__/upload/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

  <!--引入bootstrap css样式-->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="__CSS__font-awesome.min.css"> 
  </head>
  <body>
    <div class="col-sm-12">

      <form style=" opacity: 0.8;" id="valiForm" class="form-horizontal" action="<?php echo url('upload/pic_edit'); ?>"   enctype="multipart/form-data" method="post" >
        <img class="img-responsive center-block" src="__PUBLIC__/logo.png">
        <span class="heading">中国华为科技有限公司</span>

        <input value="<?php echo $data['id']; ?>" name="id" type="hidden">
        <div class="form-group input-group ">

          <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
          <input type="text" value="<?php echo $data['title']; ?>" class="form-control" name="title" id="title" placeholder="title h3" 
          >
        </div>

        <div class="form-group input-group ">

          <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
          <input type="text" value="<?php echo $data['titleid']; ?>" class="form-control" name="titleid" id="title" placeholder="titleid" 
          >
        </div>

        <div class="form-group input-group help">
         <span class="input-group-addon">
           <span class="glyphicon glyphicon-lock"></span></span>
           <input type="text" class="form-control" value="<?php echo $data['content']; ?>" name="content" id="content" placeholder="内容 p" >           
         </div>
         <div class="form-group input-group help">
           <span class="input-group-addon">
             <span class="glyphicon glyphicon-lock"></span></span>
             <input type="text" value="<?php echo $data['description']; ?>" class="form-control" name="description" id="description" placeholder="描述 价格" >           
           </div>
           <input type="text"  value="<?php echo $data['picurl']; ?>">
           <img id = "imgTest" style="width:20px;height:20px;" src="__upload__/<?php echo $data['picurl']; ?>" class="img-circle">
           <div class="form-group input-group help container kv-main">
             图片上传:<input id="file-1"  value="<?php echo $data['picurl']; ?>" type="file" name="picurl" multiple class="file" data-overwrite-initial="false" data-min-file-count="1" /> <br> 
             <input type="hidden" value="<?php echo $data['picurl']; ?>" name="picurl" id="imgPath">

           </div>
           <input type="submit" class="btn btn-default" value="上传" /> 

         </form>


       </div>
       <div class="footer">

        <p class="text-center">版权所有©2016 华为科技有限公司 <a href="http://www.miitbeian.gov.cn/"> 粤A2-20044005号</a></p>

      </div>


    </body>
    <script src="__JS__/all/jquery-2.0.3.min.js"></script>
    <script src="__JS__/upload/fileinput.min.js" type="text/javascript"></script>
    <script src="__JS__/upload/fileinput_locale_zh.js" type="text/javascript"></script>
    <script src="__JS__/all/bootstrap.min.js" type="text/javascript"></script>

    <script>
    function key() {
      if (event.keyCode == 13) {

        event.returnValue = false;
        event.cancle = true;
        loginform.submit.click();

      }

    }

    </script>

    <script>

    $("#file-1").fileinput({
        uploadUrl:'/tp5/public/admin/upload/ajax_upload', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
          // alert(filename);
          return filename.replace('(', '_').replace(']', '_');
        },
      }).on("fileuploaded", function (event, data, previewId, index) {  
        $("#imgPath").val(data.response);  
      });  
      </script>
      <script type="text/javascript" src="__JS__/login.js"></script>
      </html>