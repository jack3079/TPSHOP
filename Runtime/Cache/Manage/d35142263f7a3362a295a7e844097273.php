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
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">
    <title><?php echo ($system["sitename"]); ?>后台管理中心 - 商品管理 - 添加商品</title>
    
    
</head>

<body>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>商品管理</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/Nongke/index.php/Manage/Index/index">主页</a>
                        </li>
                        <li>
                            <a href="/Nongke/index.php/Manage/Goods/Index">商品管理</a>
                        </li>
                        <li>
                            <a href="/Nongke/index.php/Manage/Goods/Index">商品列表</a>
                        </li>
                        <li>
                            <strong>添加商品</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>添加商品</h5>
                            </div>
                            <div class="ibox-content">
                                <form  role="form" id="form1" method="post"  action="/Nongke/index.php/Manage/Goods/save_goods" class="form-horizontal" enctype="multipart/form-data" />
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">商品名称</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title"  id="title" placeholder="请输入商品名称">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">商品品牌</label>
                                        <div class="col-sm-10">
                                            <select class="form-control m-b" name="brand">
                                                <option value="0">请选择品牌</option>
                                                <?php if(is_array($brand)): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?><option value="<?php echo ($b["b_id"]); ?>"><?php echo ($b["brand"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                  <div class="form-group">
                                        <label class="col-sm-2 control-label">商品分类</label>
                                        <div class="col-sm-10">
                                            <select class="form-control m-b" name="category" >
                                                <option>请选择分类</option>
                                                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><option value="<?php echo ($c["id"]); ?>"><?php echo ($c["html"]); echo ($c["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">商品图片</label>
                                        <div class="col-sm-10">
                                        <input  type="file" name="photo" id="exampleInputFile"  >
                                        <span class="help-block m-b-none">默认主图尺寸为：640*640 </span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">商品规格</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="model"  placeholder="请输入商品规格">
                                            <span class="help-block m-b-none">如商品有其他规格属性，包装信息请在这里填写！</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">商品价格</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="price"  placeholder="请输入商品价格">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">商品数量</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="num"  placeholder="请输入商品数量 ">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">商品详情</label>
                                        <div class="col-sm-10">
                                          <textarea id="editor_id" class="form-control"  name="content"  style="height:400px;">
                                          </textarea>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">是否包邮</label>
                                        <div class="col-sm-10">
                                            <input name="free_shipping" type="radio" value="1">
                                            <label class="control-label">包邮</label>
                                            <input name="free_shipping" type="radio" value="0">
                                            <label class="control-label">不包邮</label>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">是否推荐</label>
                                        <div class="col-sm-10">
                                            <input name="tuijian" type="radio" value="1">
                                            <label class="control-label">推荐</label>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <button class="btn btn-primary" type="submit">保存内容</button>
                                            <button class="btn btn-white" type="reset">取消</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <!-- Script kindeditor -->
    <script charset="utf-8" src="/Nongke/Public/kindeditor/kindeditor-all-min.js"></script>
	<script charset="utf-8" src="/Nongke/Public/kindeditor/lang/zh-CN.js"></script>
    <script>
	KindEditor.options.filterMode = false;

	KindEditor.ready(function(K) {
			window.editor = K.create('#editor_id');
	});
    </script>
    <!-- Jquery Validate -->
    <script src="/Nongke/Public/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="/Nongke/Public/js/plugins/validate/messages_zh.min.js"></script>
	<script>

    $().ready(function () {
        // validate the comment form when it is submitted

        // validate signup form on keyup and submit
        $("#form1").validate({
            rules: {
                title: {
                    required: true,
                    minlength: 3
                },
                category: {
                     required:true,
                    },
                photo: {
                    required: true,
                },
                price: {
                    required: true,
                    number:true,
                },
                num:{
                    required:true,
                    digits:true,
                    },
                content:{
                    required:true,
                    },

            },
            messages: {
                title: {
                    required: "请输入商品名称",
                    minlength: "商品名称最少3个字符以上"
                },
                 category: {
                    required: "请选择商品分类",
                },
                 photo: {
                    required: "请上传商品主图",
                },
				price:{
					required: "请输入商品价格",
					number: "请输入正确的金额",
					},
				num:{
					required: "请输入商品库存数量",
					digits: "商品数量必须填写数字",
					},
				content:{
					required: "请填写商品详情内容",
					},
            }
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