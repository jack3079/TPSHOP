<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

    <link href="/Nongke/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Nongke/Public/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">
    <link href="/Nongke/Public/admin/css/animate.css" rel="stylesheet">
    <link href="/Nongke/Public/admin/css/style.css" rel="stylesheet">
    <!-- 基础脚本 -->
    <script src="/Nongke/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/Nongke/Public/js/bootstrap.min.js?v=3.4.0"></script>
    <script src="/Nongke/Public/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/Nongke/Public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="/Nongke/Public/admin/js/plus.js?v=2.2.0"></script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">

                        <div class="dropdown profile-element"> <span>
                            <img class="img-circle" src="/Nongke/Public/admin/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo ($Manage); ?></strong>
                             </span>  <span class="text-muted text-xs block">网站管理员 <b class="caret"></b></span> </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="/Nongke/index.php/Manage/Admin/editAdmin/admin_id/<?php echo ($Manageid); ?>">修改密码</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/Nongke/index.php/Manage/Public/logout">安全退出</a>
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
                            <li><a href="/Nongke/index.php/Manage/Index/index">后台首页</a>
                            </li>
                            <li><a href="/Nongke/index.php/Manage/System/index">网站设置</a>
                            </li>
                            <li><a href="/Nongke/index.php/Manage/System/weixin">微信设置</a>
                            </li>
                            <li><a href="/Nongke/index.php/Manage/System/sms">短信设置</a>
                            </li>
                            </li>
                            <li><a href="/Nongke/index.php/Manage/Ad/index">广告管理</a>
                            </li>
                            </li>
                            <li><a href="/Nongke/index.php/Manage/Admin/index">管理员管理</a>
                            </li>
                        </ul>
                    </li>                    

                    <li>
                        <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class="nav-label">商品管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/Nongke/index.php/Manage/Goods/index">商品列表</a>
                            </li>
                            <li><a href="/Nongke/index.php/Manage/Goods/addGoods">添加商品</a>
                            </li>
                            <li><a href="/Nongke/index.php/Manage/Category/index">商品分类</a>
                            </li>
                            <li><a href="/Nongke/index.php/Manage/Brand/index">品牌管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span class="nav-label">交易管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/Nongke/index.php/Manage/Order/index">订单管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-plane"></i> <span class="nav-label">物流管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/Nongke/index.php/Manage/Shipping/index">快递管理</a>
                            </li>
                            <li><a href="/Nongke/index.php/Manage/Freight/index">运费设置</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-credit-card"></i> <span class="nav-label">支付管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/Nongke/index.php/Manage/Pay/alipay">支付宝设置</a>
                            </li>
                            <li><a href="/Nongke/index.php/Manage/Pay/wxpay">微信支付设置</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="img-circle glyphicon glyphicon-user"></i> <span class="nav-label">客户管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/Nongke/index.php/Manage/User/index">客户列表</a>
                            </li>
                            <li><a href="/Nongke/index.php/Manage/Rank/index">客户组管理</a>
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
                            <li><a href="/Nongke/index.php/Manage/NewsCate/index">分类管理</a>
                            </li>
                            <li><a href="/Nongke/index.php/Manage/News/index">新闻管理</a>
                            </li>
                            <li><a href="/Nongke/index.php/Manage/News/about">单页管理</a>
                            </li>
                        </ul>
                    </li>
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
                            <span class="m-r-sm text-muted welcome-message"><a href="/Nongke/index.php/Manage" title="返回首页"><i class="fa fa-home"></i></a>欢迎<?php echo ($Manage); ?>登录后台管理中心</span>
                        </li>
                        <li>
                            <a href="/Nongke/index.php/Manage/Public/logout">
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title><?php echo ($system["sitename"]); ?>后台管理中心 - 交易管理 - 订单管理</title>
    <link href="/Nongke/Public/js/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
    
</head>

<body>
            
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>订单管理</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/Nongke/index.php/Manage/Index/index">主页</a>
                        </li>
                        <li>
                            <a href="/Nongke/index.php/Manage/Order/index">交易管理</a>
                        </li>
                        <li>
                            <a href="/Nongke/index.php/Manage/Order/index">订单管理</a>
                        </li>
                        <li>
                            <strong>订单详情</strong>
                        </li>
                    </ol>
                </div>
                 <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-4">
                    <div class="title-action">
                        <a href="/Nongke/index.php/Manage/Order/quxiao/id/<?php echo ($vo["o_id"]); ?>" class="btn btn-white"><i class="fa fa-pencil"></i>取消订单</a>
                        <!--<a href="#" class="btn btn-white"><i class="fa fa-check "></i> 保存 </a>-->
                        <a href="/Nongke/index.php/Manage/Order/order_print/id/<?php echo ($vo["o_id"]); ?>" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> 打印 </a>
                    </div>
                </div>
            </div>      
            
         
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content animated fadeInRight">
                    
                    
                    
                        <div class="ibox">
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="m-b-md">
                                            <h2>订单详情</h2>
                                        </div>
                                        <dl class="dl-horizontal">
                                            <dt>订单状态：</dt> 
                                            <dd><span class="label label-primary"><?php if($vo["status"] == 0): ?>未付款<?php elseif($vo["status"] == 1): ?>待发货<?php elseif($vo["status"] == 2): ?>已发货<?php elseif($vo["status"] == 3): ?>交易完成<?php else: ?>订单已取消<?php endif; ?></span>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <dl class="dl-horizontal">

                                            <dt>订单编号：</dt> 
                                            <dd><?php echo ($vo["number"]); ?></dd>
                                            <dt>订单总额：</dt> 
                                            <dd>&yen;<?php echo ($vo["total"]); ?>元</dd>
                                            <dt>商品数量：</dt> 
                                            <dd><?php echo ($vo["o_num"]); ?>件</dd>
                                            <dt>支付方式：</dt> 
                                            <dd><?php echo ($vo["pay"]["payname"]); ?></dd>
                                            <dt>配送方式：</dt> 
                                            <dd><?php echo ($vo["shipping"]["shipping_name"]); ?></dd>
                                            <dt>快递单号：</dt> 
                                            <dd><?php echo ($vo["k_number"]); ?></dd>
                                        </dl>
                                    </div>
                                    <div class="col-lg-7" id="cluster_info">
                                        <dl class="dl-horizontal">

                                            <dt>下单时间：</dt> 
                                            <dd><?php echo (date("Y-m-d H:i:s",$vo["order_time"])); ?></dd>
                                            <dt>付款时间：</dt> 
                                            <dd><?php echo (date("Y-m-d H:i:s",$vo["pay_time"])); ?></dd>
                                            <dt>发货时间：</dt>
                                            <dd><?php if($vo["f_time"] == 0): ?>未发货<?php else: echo (date("Y-m-d H:i:s",$vo["f_time"])); endif; ?></dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <dl class="dl-horizontal">
                                            <dt>客户留言</dt>
                                            <dd><?php echo ($vo["gustbook"]); ?></dd>
                                        </dl>
                                    </div>
                                </div>

                            </div>
                    
                    
                    
                    
                        <div class="ibox-content p-xl">
                            <div class="row">
                                <div class="col-sm-6">
                                    <address>
                                        <strong>收货人：</strong><?php echo ($vo["user"]["user_name"]); ?><br>
                                        <strong>收货地址：</strong><?php echo ($vo["user"]["address"]); ?><br>
                                        <abbr>联系电话：</abbr><?php echo ($vo["user"]["mobile"]); ?>
                                    </address>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <h4>单据编号：</h4>
                                    <h4 class="text-navy"><?php echo ($vo["number"]); ?></h4>
                                    <address>
                                        <strong><?php echo ($system["sitename"]); ?></strong><br>
                                        <?php echo ($system["address"]); ?><br>
                                        <abbr>客服：</abbr><?php echo ($system["tel"]); ?>
                                    </address>
                                    <p>
                                        <span><strong>日期：</strong><?php echo (date("Y-m-d H:i:s",$vo["order_time"])); ?></span>
                                </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                        <tr>
                                            <th>清单</th>
                                            <th>数量</th>
                                            <th>单价</th>
                                            <th>折扣</th>
                                            <th>折后总价</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            <div>
                                            <a class="fancybox" href="/Nongke/Public/<?php echo ($vo["goods"]["photo"]); ?>" title="<?php echo ($vo["goods"]["title"]); ?>">
                                            <img alt="<?php echo ($vo["goods"]["title"]); ?>" src="/Nongke/Public/<?php echo ($vo["goods"]["photo"]); ?>" style=" height:50px; width:auto;">
                                            </a>
                                                <strong><?php echo ($vo["goods"]["title"]); ?></strong>
                                                </div>
                                            </td>
                  
                                            <td><?php echo ($vo["o_num"]); ?></td>
                                            <td>&yen;<?php echo ($vo["goods"]["price"]); ?></td>
                                            <td><?php echo ($zhekou[0]['discounts']); ?>%</td>
                                            <td>&yen;<?php echo ($vo['o_num'] * ($vo['goods']['price']*($zhekou[0]['discounts']/100))); ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /table-responsive -->

                            <table class="table invoice-total">
                                <tbody>
                                    <tr>
                                        <td><strong>总价：</strong>
                                        </td>
                                        <td>&yen;<?php echo ($vo['o_num'] * ($vo['goods']['price']*($zhekou[0]['discounts']/100))); ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>运费：</strong>
                                        </td>
                                        <td>&yen;<?php echo ($vo["yunfei"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>总计</strong>
                                        </td>
                                        <td>&yen;<?php echo ($vo['o_num'] * ($vo['goods']['price']*($zhekou[0]['discounts']/100))+$vo['yunfei']); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-right">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-truck"></i>去发货</button>
                            </div>

<!--                            <div class="well m-t"><strong>备注：</strong>
                                 <input type="text" class="form-control" name="beizhu" value="<?php echo ($vo["beizhu"]); ?>"  placeholder="请输入备注">
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
         </div>    
            
<!--发货部分开始-->
        <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated bounceInRight">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                        </button>
                        <i class="fa fa-laptop modal-icon"></i>
                        <h4 class="modal-title">订单发货</h4>
                </div>
                <form  role="form" id="form" method="post"  action="/Nongke/index.php/Manage/Order/save_kuaidi" class="form-horizontal" >
                <div class="modal-body">
                <div class="form-group">
                <label>快递名称</label>
                <select class="form-control m-b" name="shipping_id">
                    <?php if(is_array($kuaidi)): $i = 0; $__LIST__ = $kuaidi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$k): $mod = ($i % 2 );++$i;?><option value="<?php echo ($k["s_id"]); ?>" <?php if($vo['shipping_id'] == $k['s_id']): ?>selected<?php endif; ?> ><?php echo ($k["shipping_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                 </div>
                <div class="form-group">
                <label>快递单号</label>
                 <input type="text" name="k_number" value="<?php echo ($vo["k_number"]); ?>" placeholder="请输入快递单号" class="form-control">
                 </div>
                </div>
                <div class="modal-footer">
                <input type="hidden" name="o_id" value="<?php echo ($vo["o_id"]); ?>">
                    <button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
                    <button type="submit" class="btn btn-primary">确认发货</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<!--发货结束--><?php endforeach; endif; else: echo "" ;endif; ?>
     <!-- Fancy box查看大图效果 CLASS为fancybox -->
    <script src="/Nongke/Public/js/plugins/fancybox/jquery.fancybox.js"></script>
    <script>
        $(document).ready(function () {
            $('.fancybox').fancybox({
                openEffect: 'none',
                closeEffect: 'none'
            });
        });
    </script>  
    
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