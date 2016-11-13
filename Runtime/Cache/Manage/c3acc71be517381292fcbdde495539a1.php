<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

    <link href="/KeNong/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/KeNong/Public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/KeNong/Public/admin/css/animate.css" rel="stylesheet">
    <link href="/KeNong/Public/admin/css/style.css" rel="stylesheet">
    <!-- 基础脚本 -->
    <script src="/KeNong/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/KeNong/Public/js/bootstrap.min.js"></script>
    <script src="/KeNong/Public/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/KeNong/Public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="/KeNong/Public/admin/js/plus.js"></script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">

                        <div class="dropdown profile-element"> <span>
                            <img class="img-circle" src="/KeNong/Public/admin/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo ($Manage); ?></strong>
                             </span>  <span class="text-muted text-xs block">网站管理员 <b class="caret"></b></span> </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="/KeNong/index.php/Manage/Admin/editAdmin/admin_id/<?php echo ($Manageid); ?>">修改密码</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/KeNong/index.php/Manage/Public/logout">安全退出</a>
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
                            <li><a href="/KeNong/index.php/Manage/Index/index">后台首页</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/System/index">网站设置</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/System/weixin">微信设置</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/System/sms">短信设置</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Ad/index">广告管理</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Admin/index">管理员管理</a>
                            </li>
                        </ul>
                    </li>                    

                    <li>
                        <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class="nav-label">商品管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/KeNong/index.php/Manage/Goods/index">商品列表</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Goods/addGoods">添加商品</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Category/index">商品分类</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Brand/index">品牌管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span class="nav-label">交易管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/KeNong/index.php/Manage/Order/index">订单管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-plane"></i> <span class="nav-label">物流管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/KeNong/index.php/Manage/Shipping/index">快递管理</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Freight/index">运费设置</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-credit-card"></i> <span class="nav-label">支付管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/KeNong/index.php/Manage/Pay/alipay">支付宝设置</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Pay/wxpay">微信支付设置</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="img-circle glyphicon glyphicon-user"></i> <span class="nav-label">客户管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/KeNong/index.php/Manage/User/index">客户列表</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Rank/index">客户组管理</a>
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
                            <li><a href="/KeNong/index.php/Manage/NewsCate/index">分类管理</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/News/index">新闻管理</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/News/about">单页管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-weixin"></i> <span class="nav-label">微信管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/KeNong/index.php/Manage/Wechat/keyword">关键字回复</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Wechat/Sucai">素材管理</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Wechat/menu">自定义菜单</a>
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
                            <span class="m-r-sm text-muted welcome-message"><a href="/KeNong/index.php/Manage" title="返回首页"><i class="fa fa-home"></i></a>欢迎<?php echo ($Manage); ?>登录后台管理中心</span>
                        </li>
                        <li>
                            <a href="/KeNong/index.php/Manage/Public/logout">
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
    <title><?php echo ($system["sitename"]); ?>后台管理中心 - 微信管理 - 添加多图文</title>    
    <link href="/KeNong/Public/admin/css/wechat.css" rel="stylesheet">
    
</head>

<body>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>微信管理</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/KeNong/index.php/Manage/Index/index">主页</a>
            </li>
            <li>
                <a href="/KeNong/index.php/Manage/System/weixin">微信配置</a>
            </li>
            <li>
                <a href="/KeNong/index.php/Manage/System/weixin">素材管理</a>
            </li>
            <li>
                <strong>素材列表</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">            
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>添加图文素材</h5>
                            </div>
                            <div class="ibox-content">
                            

  <div class="span9 page_message">
    <section id="contents"> 
      <div class="table-bar">
      	<div class="fl">

			<div class="tools">
				菜单<a class="btn" href="/KeNong/index.php/Manage/Wechat/sucai_add">新 增</a>

                <a class="btn" href="">一键上传素材到微信素材库</a>
                <a class="btn" href="">一键下载微信素材库到本地</a>

                


                <button class="btn " target-form="ids" url="">标题</button>

                <a class="btn" href="">标题</a>

                &nbsp;
       
			</div>

        </div>
        <div class="search-form fr cf">
          <div class="sleft">

            <input type="text" name="" class="search-input" value="" placeholder="">
            <a class="sch-btn" href="javascript:;" id="search" url=""><i class="btn-search"></i></a> </div>
        </div>
      </div>
      <!-- 数据列表 -->
      <div class="data-table">
      
        <div class="table-striped">
        	<ul class="material_list js-masonry"  data-masonry-options=''>

            	<!-- 单图文 -->
                <li class="appmsg_li">
                	<div class="appmsg_item">
                        <h6 style="overflow: hidden;"><a href="" target= _blank>标题</a></h6>
                        <p class="title">时间</p>
                        <div class="main_img">
                            <img src="图片"/>
                        </div>
                        <p class="desc" style="overflow: hidden;">介绍</p>
                    </div>
                    <div class="appmsg_action">
                    	<a href="">编辑</a>
                        <a href="">删除</a>	
                    </div>
                </li>

                <!-- 多图文 -->
                <li class="appmsg_li">
                	<div class="appmsg_item">
                        <p class="title">时间</p>
                        <div class="main_img">
                            <img src=""/>
                            <h6><a href="" target= _blank>标题</a></h6>
                        </div>
                        <p class="desc">介绍</p>
                    </div>

                    <div class="appmsg_sub_item">
                        <p class="title"><a href="" target= _blank>标题</a></p>
                        <div class="main_img">
                            <img src=""/>
                        </div>
                    </div>

                    <div class="appmsg_action">
                    	<a href="">编辑</a>
                        <a href="">删除</a>	
                    </div>
                </li>
                </if>

            </ul>
          
        </div>
      </div>
      <div class="page"> 分页</div>
    </section>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

 
  <script type="text/javascript">
$(function(){
	//搜索功能
	$("#search").click(function(){
		var url = $(this).attr('url');
        var query  = $('.search-form').find('input').serialize();
        query = query.replace(/(&|^)(w*?d*?-*?_*?)*?=?((?=&)|(?=$))/g,'');
        query = query.replace(/^&/g,'');
        if( url.indexOf('?')>0 ){
            url += '&' + query;
        }else{
            url += '?' + query;
        }
        if(query == '' ){
            url = $(this).attr('url');
        	
        }
		window.location.href = url;
	});

    //回车自动提交
    $('.search-form').find('input').keyup(function(event){
        if(event.keyCode===13){
            $("#search").click();
        }
    });

})
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