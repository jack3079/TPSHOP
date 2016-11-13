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
                            <li><a href="/kenong/index.php/Manage/Wechat/Sucai">素材管理</a>
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
    <title><?php echo ($system["sitename"]); ?>后台管理中心 - 微信管理 - 自动回复</title>    
    
    
</head>

<body>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>微信管理</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/kenong/index.php/Manage/Index/index">主页</a>
                        </li>
                        <li>
                            <a href="/kenong/index.php/Manage/System/weixin">微信配置</a>
                        </li>
                        <li>
                            <strong>自动回复</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>自动回复</h5>
                            </div>
                            <div class="ibox-content">

                             <!-- tabs -->
                            <div >
                            
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#guanzhu" aria-controls="guanzhu" role="tab" data-toggle="tab">被添加自动回复</a></li>
                                <li role="presentation"><a href="#msg" aria-controls="msg" role="tab" data-toggle="tab">消息自动回复</a></li>
                                <li role="presentation"><a href="#word" aria-controls="word" role="tab" data-toggle="tab">关键词自动回复</a></li>
                              </ul>
                            
                              <!-- Tab panes -->
                              <div class="tab-content">
                             <!-- 被添加自动回复-->
                                <div role="tabpanel" class="tab-pane active" id="guanzhu">
                                
                               <p></p>                               
                              <div class="panel panel-default">
                                <div class="panel-body">
                                <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                  <a class="btn btn-white btn-bitbucket" href="#wenzi" aria-controls="wenzi" role="tab" data-toggle="tab">
                                      <i class="fa fa-pencil"></i>文字回复
                                  </a>
                                 </li> 
                                  <li role="presentation">
                                  <a class="btn btn-white btn-bitbucket"  href="#pic" aria-controls="pic" role="tab" data-toggle="tab">
                                      <i class="fa fa-picture-o"></i>图片回复
                                  </a>
                                  </li>
                                  <li role="presentation">
                                  <a class="btn btn-white btn-bitbucket" href="#tuwen" aria-controls="tuwen" role="tab" data-toggle="tab">
                                      <i class="fa fa-newspaper-o"></i>图文回复
                                  </a>
                                  </li>
                                  </ul> 
                               <div class="tab-content">    
                              <div role="tabpanel" class="tab-pane active" id="wenzi">
                           <form  role="form" id="form"  method="post" action="/kenong/index.php/Manage/Wechat/Save_Event_Text" class="form-horizontal" />
                              <textarea class="form-control" rows="6"  name="msg_info" id="msg_info"><?php echo ($message["msg_info"]); ?></textarea>
                              <div class="hr-line-dashed"></div>
                                  <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-5">
                                            <input type="hidden" name="msg_id" value="<?php echo ($message["msg_id"]); ?>">
                                            <button class="btn btn-primary" type="submit" id="submit">保存发布</button>
                                            <button class="btn btn-white" type="reset">取消</button>
                                        </div>
                                    </div>
                                 </form>   
                              </div>
                              <div role="tabpanel" class="tab-pane" id="pic">
                              <form  role="form" id="form1" method="post" action="/kenong/index.php/Manage/Wechat/Save_Event_Pic" class="form-horizontal"  enctype="multipart/form-data" />
                                <DIV class="contact-box " style="margin-top: 10px;">
                                  <div class="weui_uploader_bd" style=" float:none; margin:auto;">
                                      <div class="weui_uploader_input_wrp" >
                                       <input class="weui_uploader_input" type="file" name="msg_info" id="wepic"  />                                    
                                      </div>
                                      <div class="weui_pic">
                                      <label class="control-label">上传图片</label>
                                        <p><img src="" id="weimg" class="img-thumbnail"></p>
                                        </div>
                                  </div>
                                </DIV>
                              <div class="hr-line-dashed"></div>
                                  <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-5">
                                            <input type="hidden" name="msg_id" value="<?php echo ($message["msg_id"]); ?>">
                                            <button class="btn btn-primary" type="submit">保存发布</button>
                                            <button class="btn btn-white" type="reset">取消</button>
                                        </div>
                                    </div>
                               </form>     
                              </div>
                              <div role="tabpanel" class="tab-pane" id="tuwen">
                               图文回复
                              </div>
                              </div>
                               </div>
                              </div>



                                </div>
                              <!-- 被添加自动回复结束-->  
                               
                              <!-- 消息自动回复开始-->   
                                <div role="tabpanel" class="tab-pane" id="msg">...</div>
                              <!-- 消息自动回复结束-->  
                              
                              <!-- 关键词自动回复开始-->
                                <div role="tabpanel" class="tab-pane" id="word" >
<div class="row">
<!-- 16:9 aspect ratio -->
<div class="col-sm-3">
<div class="embed-responsive embed-responsive-4by3" style="height:1000px;">
  <iframe class="embed-responsive-item" src="word.html" style="height:1000px;"  name="left"></iframe>
</div> 
</div>


<!-- 4:3 aspect ratio -->
<div class="col-lg-9">
<div class="embed-responsive embed-responsive-4by3" style="height:1000px;">
  <iframe class="embed-responsive-item" src="word_add.html" style="height:1500px;"  name="right"></iframe>
</div>     
</div>                         
</div>                                
                                </div>
                              <!-- 关键词自动回复结束-->
                              </div>
                            
                            </div>
                             <!-- tabs end -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- layer 插件 -->
<script src="/kenong/Public/js/plugins/layer/layer.js"></script>

<script>
 // ajax 提交表单
 $(document).ready(function(){
     $("#submit").click(function(){
         var tourl =  $("#form").attr('action');
		  $.post(tourl,$("form").serialize(),function(data){
			  if(data['status']==1){
		   layer.msg(data['info'],{icon:1,time:5000,offset:'100px',success:function(){
			   location.href = data['url'];
			   }});     
		  }else{
		   layer.msg(data['info'],{icon:2,time:30000,offset:'100px',cancel:function(){}});			  
			  }
         });
 		 
		// window.location.reload();  
     });
 });
 </script>
<script>	
$("#wepic").change(function(){
	var objUrl = getObjectURL(this.files[0]) ;
	console.log("objUrl = "+objUrl) ;
	if (objUrl) {
		$("#weimg").attr("src", objUrl) ;
	}
}) ;
//建一个存储file的url
function getObjectURL(file) {
	var url = null ; 
	if (window.createObjectURL!=undefined) { // basic
		url = window.createObjectURL(file) ;
	} else if (window.URL!=undefined) { // mozilla(firefox)
		url = window.URL.createObjectURL(file) ;
	} else if (window.webkitURL!=undefined) { // webkit or chrome
		url = window.webkitURL.createObjectURL(file) ;
	}
	return url ;
}
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