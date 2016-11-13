<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh"><head>
	<meta charset="UTF-8">
	<title><?php echo C('Site_Name');?>-管理员登录</title> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="renderer" content="webkit" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="/KeNong/Public/css/bootstrap.min.css" />    
    <link rel="stylesheet" type="text/css" href="/KeNong/Public/admin/css/login.css" />
    <!--引入JS文件-->
	<script src="/KeNong/Public/js/jquery-2.1.1.min.js"></script>    
</head>
<body>

<!--头部开始-->
<header class="header  white-bg">
<div class="ico-logo">
    <i class="glyphicon glyphicon-th-list"></i>
</div>
<!--logo start-->
<a href="#" class="logo"><?php echo C('Site_Name');?><span>后台管理系统</span></a>
<!--logo end-->
</header>
<!--头部结束-->

<!--主体登录部分-->

<div class="login">
    <div class="container">
      <form class="form-signin" action="<?php echo U('public/login');?>" method="post" role="form">
        <h2 class="form-signin-heading">管理员登录</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" name="Manage_Name"  placeholder="请输入用户名"  required/>
            <input type="password" class="form-control" name="Manage_Pwd"  placeholder="请输入密码" required/>
            <input type="text" class="form-control" name="vcode" placeholder="请输入验证码"  required/>
            <img class="vcode" src="/KeNong/index.php/Manage/Public/verify" onclick="this.src='/KeNong/index.php/Manage/Public/verify?'+new Date().getTime();"/>
            <button class="btn btn-lg btn-login btn-block" type="submit">登 录</button>
        </div>
      </form>
    </div>
</div>
<!--登录结束-->
</body>
</html>