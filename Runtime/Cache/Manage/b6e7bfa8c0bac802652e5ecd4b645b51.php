<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

    <link href="/kenong/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/kenong/Public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/kenong/Public/admin/css/animate.css" rel="stylesheet">
    <link href="/kenong/Public/admin/css/style.css" rel="stylesheet">
    <!-- 基础脚本 -->
    <script src="/kenong/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/kenong/Public/js/bootstrap.min.js"></script>
    <script src="/kenong/Public/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/kenong/Public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="/kenong/Public/admin/js/plus.js"></script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">

                        <div class="dropdown profile-element"> <span>
                            <img class="img-circle" src="/kenong/Public/admin/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo ($Manage); ?></strong>
                             </span>  <span class="text-muted text-xs block">网站管理员 <b class="caret"></b></span> </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="/kenong/index.php/Manage/Admin/editAdmin/admin_id/<?php echo ($Manageid); ?>">修改密码</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/kenong/index.php/Manage/Public/logout">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            科农
                        </div>

                    </li>
                    <li class="active">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">商城设置</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/kenong/index.php/Manage/Index/index">后台首页</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/System/index">网站设置</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/System/weixin">微信设置</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/System/sms">短信设置</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/Ad/index">广告管理</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/Admin/index">管理员管理</a>
                            </li>
                        </ul>
                    </li>                    

                    <li>
                        <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class="nav-label">商品管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/kenong/index.php/Manage/Goods/index">商品列表</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/Goods/addGoods">添加商品</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/Category/index">商品分类</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/Brand/index">品牌管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span class="nav-label">交易管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/kenong/index.php/Manage/Order/index">订单管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-plane"></i> <span class="nav-label">物流管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/kenong/index.php/Manage/Shipping/index">快递管理</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/Freight/index">运费设置</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-credit-card"></i> <span class="nav-label">支付管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/kenong/index.php/Manage/Pay/alipay">支付宝设置</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/Pay/wxpay">微信支付设置</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="img-circle glyphicon glyphicon-user"></i> <span class="nav-label">客户管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/kenong/index.php/Manage/User/index">客户列表</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/Rank/index">客户组管理</a>
                            </li>
                            <li><a href="">分销提成</a>
                            </li>
                            <li><a href="">提现管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-edit"></i> <span class="nav-label">内容管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/kenong/index.php/Manage/NewsCate/index">分类管理</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/News/index">新闻管理</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/News/about">单页管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-weixin"></i> <span class="nav-label">微信管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/kenong/index.php/Manage/Wechat/keyword">关键字回复</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/Wechat/Text">图文回复</a>
                            </li>
                            <li><a href="/kenong/index.php/Manage/Wechat/menu">自定义菜单</a>
                            </li>
                        </ul>
                    </li>
               </ul>     
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message"><a href="/kenong/index.php/Manage" title="返回首页"><i class="fa fa-home"></i></a>欢迎<?php echo ($Manage); ?>登录后台管理中心</span>
                        </li>
                        <li>
                            <a href="/kenong/index.php/Manage/Public/logout">
                                <i class="fa fa-sign-out"></i> 退出
                            </a>
                        </li>
                    </ul>

                </nav>
            </div> 
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">
    <title><?php echo ($system["sitename"]); ?>后台管理中心 - 内容管理 - 分类管理</title>
    
</head>

<body>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>内容分类列表</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/kenong/index.php/Manage/Index/index">主页</a>
                        </li>
                        <li>
                            <a href="/kenong/index.php/Manage/News/index">内容管理</a>
                        </li>
                        <li>
                            <a href="/kenong/index.php/Manage/NewsCate/index">分类管理</a>
                        </li>
                        <li>
                            <strong>分类列表</strong>
                        </li>
                    </ol>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>分类列表</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link" title="收起页面">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>

                                    <a title="添加分类" href="/kenong/index.php/Manage/NewsCate/addNewsCate" class="close-link">
                                    <i class="fa fa-plus text-navy"></i>
                                    </a>
                                    <a href="#" class="close-link" title="隐藏页面">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="ibox-content">
                                <div class="row">

                                    <div class="col-sm-4 m-b-xs">
                                    <!--中间部分为空-->
                                    </div>
                                </div>

                                <!--表格-->
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>

                                                <th>ID</th>
                                                <th>分类名称</th>
                                                <th>所属类型</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                                <td>
                                                    <span><?php echo ($vo["c_id"]); ?></span>
                                                </td>
                                                <td><?php echo ($vo["c_title"]); ?></td>
                                                <td><?php if($vo["c_type"] == 0): ?>单页分类<?php else: ?>新闻分类<?php endif; ?></td>
                                                <td>
                                                <a href="/kenong/index.php/Manage/NewsCate/editNewsCate/id/<?php echo ($vo["c_id"]); ?>"><i class="fa fa-edit text-navy"></i></a>
                                                <a href="/kenong/index.php/Manage/NewsCate/del_cate/id/<?php echo ($vo["c_id"]); ?>"><i class="fa  fa-trash-o text-danger"></i></a>
                                                </td>
                                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </tbody>
                                    </table>
                               <!--分页-->
                              <div class="pull-right">
                                  <nav>
                                    <?php echo ($page); ?>
                                  </nav>
                                </div>
                                <!--分页END-->
                                </div>

                            </div>
                        </div>
                    </div>


</body>
</html>

            <div class="footer">
                <div class="pull-right">
                    By：<a href="<?php echo C('Site_Url');?>" target="_blank"><?php echo ($system["sitename"]); ?></a>
                </div>
                <div>
                   Copyright©2016<a href="<?php echo ($system["url"]); ?>"><?php echo ($system["copyright"]); ?></a> 
                </div>
            </div>
        </div>
    </div>


</body>
</html>