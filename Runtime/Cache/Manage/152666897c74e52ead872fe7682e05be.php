<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title><?php echo ($system["sitename"]); ?>后台管理中心 - 交易管理 - 订单管理-打印订单</title>
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
    <link href="/Nongke/Public/js/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
    
</head>

<body class="white-bg">
            <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="wrapper wrapper-content p-xl">

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
                            </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
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