<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

    <link href="/tpshop/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/tpshop/Public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/tpshop/Public/admin/css/animate.css" rel="stylesheet">
    <link href="/tpshop/Public/admin/css/style.css" rel="stylesheet">
    <!-- 基础脚本 -->
    <script src="/tpshop/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/tpshop/Public/js/bootstrap.min.js"></script>
    <script src="/tpshop/Public/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/tpshop/Public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="/tpshop/Public/admin/js/plus.js"></script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">

                        <div class="dropdown profile-element"> <span>
                            <img class="img-circle" src="/tpshop/Public/admin/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo ($Manage); ?></strong>
                             </span>  <span class="text-muted text-xs block">网站管理员 <b class="caret"></b></span> </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="/tpshop/index.php/Manage/Admin/editAdmin/admin_id/<?php echo ($Manageid); ?>">修改密码</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/tpshop/index.php/Manage/Public/logout">安全退出</a>
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
                            <li><a href="/tpshop/index.php/Manage/Index/index">后台首页</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/System/index">网站设置</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/System/weixin">微信设置</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/System/sms">短信设置</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/Ad/index">广告管理</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/Admin/index">管理员管理</a>
                            </li>
                        </ul>
                    </li>                    

                    <li>
                        <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class="nav-label">商品管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/tpshop/index.php/Manage/Goods/index">商品列表</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/Goods/addGoods">添加商品</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/Category/index">商品分类</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/Brand/index">品牌管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span class="nav-label">交易管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/tpshop/index.php/Manage/Order/index">订单管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-plane"></i> <span class="nav-label">物流管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/tpshop/index.php/Manage/Shipping/index">快递管理</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/Freight/index">运费设置</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-credit-card"></i> <span class="nav-label">支付管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/tpshop/index.php/Manage/Pay/alipay">支付宝设置</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/Pay/wxpay">微信支付设置</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="img-circle glyphicon glyphicon-user"></i> <span class="nav-label">客户管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/tpshop/index.php/Manage/User/index">客户列表</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/Rank/index">客户组管理</a>
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
                            <li><a href="/tpshop/index.php/Manage/NewsCate/index">分类管理</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/News/index">新闻管理</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/News/about">单页管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-weixin"></i> <span class="nav-label">微信管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/tpshop/index.php/Manage/Wechat/keyword">关键字回复</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/Wechat/Sucai">素材管理</a>
                            </li>
                            <li><a href="/tpshop/index.php/Manage/Wechat/menu">自定义菜单</a>
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
                            <span class="m-r-sm text-muted welcome-message"><a href="/tpshop/index.php/Manage" title="返回首页"><i class="fa fa-home"></i></a>欢迎<?php echo ($Manage); ?>登录后台管理中心</span>
                        </li>
                        <li>
                            <a href="/tpshop/index.php/Manage/Public/logout">
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
    <title><?php echo ($system["sitename"]); ?>后台管理中心 - 商城设置</title>
    
    
</head>

<body>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>网站设置</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/tpshop/index.php/Manage/Index/index">主页</a>
            </li>
            <li>
                <a href="/tpshop/index.php/Manage/System/index">商城设置</a>
            </li>
            <li>
                <strong>网站设置</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>网站基本信息设置</h5>
                </div>
                <div class="ibox-content">
                    <form  role="form" id="form" method="post" action="/tpshop/index.php/Manage/System/saveSite" class="form-horizontal" enctype="multipart/form-data" />
                    
                   <!--start-->                   
                  <div class="container-fluid">
                      <div class="row-fluid">
                          <div class="span12">
                              <div class="tabbable" id="tabs-296440">
                                  <ul class="nav nav-tabs">
                                      <li class="active">
                                          <a href="#panel-333787" data-toggle="tab">网站设置</a>
                                      </li>
                                      <li>
                                          <a href="#panel-230608" data-toggle="tab">分销设置</a>
                                      </li>
                                  </ul>
                                  <div class="tab-content">
                                      <div class="tab-pane active" id="panel-333787">
                                        <!--tab1-->
                                   <div class="hr-line-dashed"></div>
                                   <div class="form-group">
                                        <label class="col-sm-2 control-label">网站名称</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="sitename" value="<?php echo ($system["sitename"]); ?>" >
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">网站网址</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="url" value="<?php echo ($system["url"]); ?>" >
                                            <!--<span class="help-block m-b-none">帮助文本</span>-->
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">SEO关键字</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="keyword" value="<?php echo ($system["keyword"]); ?>" placeholder="请输入网站关键字">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                   
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">网站描述</label>
                                        <div class="col-sm-10">
                                        <textarea placeholder="请输入网站描述信息"  cols="2" rows="2" class="form-control" name="description"><?php echo ($system["description"]); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">网站LOGO</label>
                                        <div class="col-sm-10">
                                        <img src="/tpshop/Public/<?php echo ($system["logo"]); ?>"   height="100" class="thumbnail">
                                        <input  type="file" name="logo" id="exampleInputFile"  >
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">公司联系人</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="contact" value="<?php echo ($system["contact"]); ?>" placeholder="请输入联系人姓名">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">电子邮件</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" value="<?php echo ($system["email"]); ?>" placeholder="请输入EMAIL">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">联系电话</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tel" value="<?php echo ($system["tel"]); ?>" placeholder="请输入联系电话">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">公司传真</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="fax" value="<?php echo ($system["fax"]); ?>" placeholder="请输入传真号码">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">联系手机</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="phone" value="<?php echo ($system["phone"]); ?>" placeholder="请输入手机号码">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">联系地址</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="address" value="<?php echo ($system["address"]); ?>" placeholder="请输入联系地址">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">备案信息</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="icp" value="<?php echo ($system["icp"]); ?>" placeholder="请输入备案IPC号">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                   
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">版权信息</label>
                                        <div class="col-sm-10">
                                        <textarea placeholder="请输入网站底部版权描述"  cols="1" rows="3" class="form-control" name="copyright"><?php echo ($system["copyright"]); ?></textarea>
                                        </div>
                                    </div>
                                         <!-- tab1 end-->
                                      </div>
                                      <div class="tab-pane" id="panel-230608">
                                  <div class="hr-line-dashed"></div>
                                   <div class="form-group">
                                        <label class="col-sm-2 control-label">分销层数</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="fenxiao" value="<?php echo ($system["fenxiao"]); ?>" >
                                            <span class="help-block m-b-none">*注：分销层数设置请不要超过3层，只能填写数字</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">分销佣金</label>
                                        <div class="col-sm-10 input-group m-b">
                                            <input type="text" class="form-control" name="yongjin" value="<?php echo ($system["yongjin"]); ?>" placeholder="佣金设置务必与分销层数一致，并用|隔开，比如分销设置三层，那么佣金设置就是15|10|5"><span class="input-group-addon">%</span>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                        <span class="help-block m-b-none">*注：佣金设置务必与分销层数一致，并用|隔开，比如分销设置三层，那么佣金设置就是15|10|5</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">提现金额</label>
                                        <div class="col-sm-10 input-group m-b">
                                            <input type="text" class="form-control" name="tixian" value="<?php echo ($system["tixian"]); ?>" placeholder="会员分销佣金金额达到多少可提现，如不设置则默认100元。"><span class="input-group-addon">元</span>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                        <span class="help-block m-b-none">*注：会员分销佣金金额达到多少可提现，如不设置则默认100元，只能填写数字。</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">手续费设置</label>
                                        <div class="col-sm-10 input-group m-b">
                                            <input type="text" class="form-control" name="shouxufei" value="<?php echo ($system["shouxufei"]); ?>" placeholder="提现手续费设置"><span class="input-group-addon">%</span>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                        <span class="help-block m-b-none">*注：提现手续费设置，只能填写数字。</span>
                                        </div>                                        
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">自动收货时间</label>
                                        <div class="col-sm-10 input-group m-b">
                                            <input type="text" class="form-control" name="day" value="<?php echo ($system["day"]); ?>" placeholder="自动确认收货时间设置"><span class="input-group-addon">天</span>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                        <span class="help-block m-b-none">*注：自动确认收货时间设置，只能填写数字。</span>
                                        </div>                                        
                                    </div>
                                    

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>                    
                   <!--end-->                   
                    
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

    <!-- Jquery Validate -->
    <script src="/tpshop/Public/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="/tpshop/Public/js/plugins/validate/messages_zh.min.js"></script>
        <script>
        $(document).ready(function () {

            $("#form").validate({
                rules: {
                    sitename: {
                        required: true,
                        minlength: 3
                    },
                    url: {
                        required: true,
                        url: true
                    },
                    email: {
                        email: true
                    },
                    fenxiao: {
                        digits: true
                    },
                    tixian: {
                        number: true
                    },
                    shouxufei: {
                        number: true
                    },
                    day: {
                        digits: true
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