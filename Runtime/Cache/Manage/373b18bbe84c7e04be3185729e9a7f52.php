<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title><?php echo C('Site_Name');?> - 404页面</title>
    <link href="/shop/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/shop/Public/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">
    <link href="/shop/Public/admin/css/animate.css" rel="stylesheet">
    <link href="/shop/Public/admin/css/style.css?v=2.2.0" rel="stylesheet">

</head>

<body class="gray-bg">


    <div class="middle-box text-center animated fadeInDown">
        <h1>404</h1>
        <h3 class="font-bold">页面未找到！</h3>

        <div class="error-desc">
            抱歉，页面好像去火星了~
            <form class="form-inline m-t" role="form">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="请输入您需要查找的内容 …">
                </div>
                <button type="submit" class="btn btn-primary">搜索</button>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/shop/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/shop/Public/js/bootstrap.min.js"></script>

</body>

</html>