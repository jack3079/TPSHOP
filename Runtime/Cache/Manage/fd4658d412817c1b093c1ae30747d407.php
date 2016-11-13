<?php if (!defined('THINK_PATH')) exit();?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
     <html xmlns="http://www.w3.org/1999/xhtml">
     <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>跳转提示:<?php echo ($msgTitle); ?></title>
      <link href="/KeNong/Public/css/bootstrap.min.css" rel="stylesheet">

     </head>

     <body>
     
     <div class="container">
     <div class="col-lg-4 col-lg-offset-4">
         <div class="panel panel-success">
             <div class="panel-heading">
                 <div class="panel-title text-center">
                 <h3>系统提示信息:<?php echo ($msgTitle); ?></h3>
                 </div>
             </div>
             <div class="panel-body text-center">
                 <h3><?php echo ($message); ?></h3>
                 <b id="wait"><?php echo ($waitSecond); ?></b>秒后自动跳转<meta http-equiv=refresh content=<?php echo ($waitSecond); ?>;url="<?php echo ($jumpUrl); ?>"><BR>
               <a id="href" href="<?php echo ($jumpUrl); ?>">点击此链接，立即跳转</a>

             </div>
         </div>
     </div>
  </div>
      <script type="text/javascript">

     (function(){

     var wait = document.getElementById('wait'),href = document.getElementById('href').href;

     var interval = setInterval(function(){

     var time = --wait.innerHTML;

     if(time <= 0) {

     location.href = href;

     clearInterval(interval);

     };

     }, 1000);

     })();

     </script>   
     
     
     


     </body>

     </html>