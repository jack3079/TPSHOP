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
                            <li><a href="">支付宝设置</a>
                            </li>
                            <li><a href="">微信支付设置</a>
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
    <title><?php echo ($system["sitename"]); ?>后台管理中心 - 客户管理 - 添加客户</title>
    
    
</head>

<body>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>客户管理</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/Nongke/index.php/Manage/Index/index">主页</a>
                        </li>
                        <li>
                            <a href="/Nongke/index.php/Manage/User/index">客户管理</a>
                        </li>
                        <li>
                            <a href="/Nongke/index.php/Manage/User/index">客户列表</a>
                        </li>
                        <li>
                            <strong>添加客户</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>添加客户</h5>
                            </div>
                            <div class="ibox-content">
                                <form  role="form" id="form" method="post"  action="/Nongke/index.php/Manage/User/save_user" class="form-horizontal" />
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">手机号码</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="mobile" id="mobile"  placeholder="请输入手机号码">
                                             <span class="help-block m-b-none">*注：请务必填写真实可联系到的手机号码！</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">用户名</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="username"  placeholder="请输入用户名">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">用户密码</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="pass"  placeholder="请输入密码">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">提现密码</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="tixian_pass"  placeholder="请再次输入密码">
                                            <span class="help-block m-b-none">*注：请设置提现密码</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">收货联系人</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_name"  placeholder="请输入收货联系人名称">
                                             <span class="help-block m-b-none">*注：请填写收货联系人姓名</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">微信号</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="wechatid"  placeholder="请输入微信号">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">收货地址</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="address"  placeholder="请输入收货地址">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">账户余额</label>
                                        <div class="col-sm-4 input-group">
                                            <input type="text" class="form-control" name="bank" >
                                            <span class="help-block m-b-none">*注：货币输入格式如：<font color="#FF0000">1.00</font>&nbsp;&nbsp;单位是(元)，最多只能带2位小数</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">账户佣金</label>
                                        <div class="col-sm-4 input-group">
                                            <input type="text" class="form-control" name="yjmoney" >
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">所属客户组</label>

                                        <div class="col-sm-10">
                                            <select class="form-control m-b" name="rank_id">
                                            <?php if(is_array($rank)): $i = 0; $__LIST__ = $rank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?><option value="<?php echo ($group["r_id"]); ?>"><?php echo ($group["r_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>    
                                            </select>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>


                                  <div class="form-group" id="data_1">
                                      <label class="col-sm-2 control-label">注册时间</label>
                                      <div class="col-sm-10 input-group date">
                                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                          <input type="text" class="form-control" name="time">
                                      </div>
                                  </div>
 

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

    <!-- Jquery Validate -->
    <script src="/Nongke/Public/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="/Nongke/Public/js/plugins/validate/messages_zh.min.js"></script>
        <!-- Data picker -->
    <script src="/Nongke/Public/js/plugins/datapicker/bootstrap-datepicker.js"></script>
    
        <script>
		//时间
		 $(document).ready(function () {

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
		});
//验证
    $().ready(function () {
        // validate the comment form when it is submitted

        // validate signup form on keyup and submit
        $("#form").validate({
            rules: {
                mobile: {
                    required: true,
					digits:true,
					mobile:true,
				    remote:{
					url:'/Nongke/index.php/Manage/User/check_mobile',
					type:'POST',
					data:{
					mobile: function(){
					return $("#mobile").val();
					}
				    }
					}
                },
                pass: {
                     required:true,
					 minlength:6
                    },
         tixian_pass: {
                     required:true,
					 minlength:6
                    },
           user_name: {
                    required: true,
					minlength:2
                },
               bank: {
                    number:true,
					currency:true
                },
				time:{
					date:true,
					}

            },
            messages: {
                mobile: {
                    required: "请输入手机号码",
					digits: "请输入正确的手机号码",
                    mobile: "请输入正确的手机号码",
					remote: "您注册的手机号码已存在！"
                },
                 pass: {
                    required: "请选填写密码",
					minlength: "密码不能少于6位"
                },
                 tixian_pass: {
                    required: "请选填写密码",
					minlength: "密码不能少于6位"
                },
				user_name:{
                    required: "请填写联系人姓名",
					minlength: "联系人姓名不得少于2位"
					},
					bank:{
						currency:"请输入正确的金额",
						number:"请输入正确的金额"
						},
				time:{
					date: "请填写正确的时间格式"
					}
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