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
    <title><?php echo ($system["sitename"]); ?>后台管理中心 - 微信管理 - 添加多图文</title>    
    <link href="/tpshop/Public/admin/css/wechat.css" rel="stylesheet">
    
</head>

<body>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>微信管理</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/tpshop/index.php/Manage/Index/index">主页</a>
            </li>
            <li>
                <a href="/tpshop/index.php/Manage/System/weixin">微信配置</a>
            </li>
            <li>
                <a href="/tpshop/index.php/Manage/Wechat/sucai">素材管理</a>
            </li>
            <li>
                <strong>添加素材</strong>
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


  <section id="contents"> 
    <div class="tab-content"> 
      <h3>新建图文消息</h3>
      <!-- 表单 -->
      <div id="form" action="" class="form-horizontal form-center">
        <div class="material_form">
       		<div class="preview_area">

            <?php if(empty($main)): ?><form data-index='0' class="appmsg_item edit_item editing">
                    <p class="time">时间</p>
                    <div class="main_img">
                        <img src="/tpshop/Public/admin/img/no_cover_pic.png" data-coverid="0"/>
                        <h6 class="title">这是标题</h6>
                    </div>
                    <p class="intro"></p>
                     <input type="hidden" name="title" placeholder="这是标题" />
                      <input type="hidden" name="cover_id" value="0"/>
                    <input type="hidden" name="intro" placeholder="这是摘要描述"/>
                    <input type="hidden" name="author" placeholder="作者"/>
                    <input type="hidden" name="link" placeholder="外链"/>
                    <textarea style="display:none" name="content"></textarea>
                    <div class="hover_area"><a href="javascript:;" onClick="editItem(this)">编辑</a></div>
                </form>
               <?php else: ?>
                  <form data-index='0' class="appmsg_item edit_item editing">
                    <p class="time"><!--cTime|time_format--></p>
                    <div class="main_img">
                        <img src="" data-coverid=""/>
                        <h6 class="title"><!--main.title--></h6>
                    </div>
                    <p class="intro"><!--main.intro--></p>
                    <input type="hidden" name="id" value=""/>
                     <input type="hidden" name="title" value="" />
                      <input type="hidden" name="cover_id" value=""/>
                    <input type="hidden" name="intro" value=""/>
                    <input type="hidden" name="author" value=""/>
                    <input type="hidden" name="link" value=""/>
                    <textarea style="display:none" name="content"><!--main.content--></textarea>
                    <div class="hover_area"><a href="javascript:;" onClick="editItem(this)">编辑</a></div>
                </form>
               <!--volist name="tuwen" id="vo"-->
                <form data-index='key+1' class="appmsg_sub_item edit_item">
                    <p class="title">{vo.title}</p>
                    <div class="main_img">
                        <img src="{vo.cover_id|get_cover_url}" data-coverid="{vo.cover_id|get_cover_url}"/>
                    </div>
                    <input type="hidden" name="id" value="{vo.id}"/>
                     <input type="hidden" name="title" value="{vo.title}"/>
                    <input type="hidden" name="cover_id" value="{vo.cover_id}"/>
                    <input type="hidden" name="intro" value="{vo.intro}"/>
                    <input type="hidden" name="author" value="{vo.author}"/>
                    <input type="hidden" name="link" value="{vo.link}"/>
                    <textarea style="display:none" name="content">{vo.content}</textarea>
                    <div class="hover_area"><a href="javascript:;" onClick="editItem(this)">编辑</a><a href="javascript:;" onClick="deleteItem(this)">删除</a></div>
                </form>
               <!--/volist--><?php endif; ?>
                <div class="appmsg_edit_action">
                    <a href="javascript:;" onClick="addMsg();">添加</a>
                </div>
            </div>
            <div class="edit_area">
            	<em class="area_arrow"></em>
            	<div class="pull-left">
                	<div class="tab-pane in appmsg_edit_group">

                        
                                   <div class="form-group">
                                        <label class="col-sm-2 control-label">图文标题</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="p_title"  placeholder="请输入图文标题">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div> 
                        
                                   <div class="form-group">
                                        <label class="col-sm-2 control-label">图文作者</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" name="p_author"  placeholder="请输入图文作者">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div> 

                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">图文封面</label>
                                        <div class="col-sm-7">
                                          <input name="p_cover" class="form-control" type="file" data-callback="uploadImgCallback">
                                          <span class="help-block m-b-none">图片链接，支持JPG、PNG格式，较好的效果为大图720*400，小图400*400</span>
                                    <div class="upload-img-box" rel="img" style="display:none">
                                      <div class="upload-pre-item2"><img width="100" height="100" src=""/></div>
                                        <em class="edit_img_icon">&nbsp;</em>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div> 

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">图文摘要</label>
                                        <div class="col-sm-10">
                                          <textarea  class="form-control"  name="p_intro" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">图文正文</label>
                                        <div class="col-sm-10">
                                          <textarea id="editor_id"  class="form-control"  name="p_content" style="height:400px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                   <div class="form-group">
                                        <label class="col-sm-2 control-label">图文外链</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="p_link"  placeholder="请输入外链">
                                        </div>
                                    </div>
    
                  </div>
                </div>
            </div>
        </div>
        <div class="form-item form_bh">
         <div class="hr-line-dashed"></div>
          <div class="form-group">
              <div class="col-sm-12 text-center">
                  <button class="btn btn-primary" type="submit" id="submit">保存内容</button>
                  <button class="btn btn-white" type="reset">取消</button>
              </div>
          </div>
        </div>
      </div>
    </div>
    
    
  </section>


</div>
</div>
</div>
</div>
</div>


    <!-- Script kindeditor -->
    <script charset="utf-8" src="/tpshop/Public/kindeditor/kindeditor-all-min.js"></script>
	<script charset="utf-8" src="/tpshop/Public/kindeditor/lang/zh-CN.js"></script>
    <script>
	KindEditor.options.filterMode = false;

	KindEditor.ready(function(K) {
			window.editor = K.create('#editor_id',{width:'100%',resizeType:1});
	});
    </script>
<script charset="utf-8" src="/tpshop/Public/admin/js/admin_common.js"></script>  
<script charset="utf-8" src="/tpshop/Public/admin/js/jquery.dragsort-0.5.2.min.js"></script>     
  <script type="text/javascript">
$('#submit').click(function(){
    var postUrl = $('#form').attr('action');
	var dataJson = [];
	$('.edit_item').each(function(index, element) {
        dataJson.push($(this).serializeArray());
    });
	$(this).addClass('disabled');
	//console.log(dataJson);
	//console.log(JSON.stringify(dataJson));
	//提交数组字符串 php解析后进行保存
	$.post(postUrl,{'dataStr':JSON.stringify(dataJson)},function(data){
		$('#submit').removeClass('disabled');
		if(data.status==1){
			updateAlert(data.info,'success');
			setTimeout(function(){
				  location.href=data.url;
			},1500);
		}else{
			updateAlert(data.info);
		}
	})
	return false;
});
$(function(){
	//初始化上传图片插件
	initUploadImg();

    showTab();
	
	$('.toggle-data').each(function(){
		var data = $(this).attr('toggle-data');
		if(data=='') return true;		
		
	     if($(this).is(":selected") || $(this).is(":checked")){
			 change_event(this)
		 }
	});
	
	$('select').change(function(){
		$('.toggle-data').each(function(){
			var data = $(this).attr('toggle-data');
			if(data=='') return true;		
			
			 if($(this).is(":selected") || $(this).is(":checked")){
				 change_event(this)
			 }
		});
	});
	
	//动态预览
	$('input[name="p_title"]').keyup(function(){
		$('.editing').find('.title').text($(this).val());
		$('.editing').find('input[name="title"]').val($(this).val());
	});
	$('input[name="p_author"]').keyup(function(){
		$('.editing').find('.author').text($(this).val());
		$('.editing').find('input[name="author"]').val($(this).val());
	});
	$('input[name="p_link"]').keyup(function(){
		$('.editing').find('.link').text($(this).val());
		$('.editing').find('input[name="link"]').val($(this).val());
	});
	$('textarea[name="p_intro"]').keyup(function(){
		$('.editing').find('.intro').text($(this).val());
		$('.editing').find('input[name="intro"]').val($(this).val());
	});
	imageEditor.addListener("contentChange",function(){
		$('.editing').find('textarea[name="content"]').val(imageEditor.getContent());
	});
	imageEditor.addListener("ready", function () {
       initForm($('.edit_item').eq(0));
 	});
	
	
});
function addMsg(){
	var curCount = $('.edit_item').size();
	if(curCount>=8){
		updateAlert('你最多只可以增加8条图文信息');
		return false;
	}
	//console.log(curCount);
	var addHtml = $('<form data-index="'+curCount+'" class="appmsg_sub_item edit_item">'+
                    '<p class="title"></p>'+
                    '<div class="main_img">'+
                        '<img src="/tpshop/Public/admin/img/no_cover_pic_s.png" data-coverid="0"/>'+
                    '</div>'+
                    '<input type="hidden" name="title" placeholder="这是标题"/>'+
                    '<input type="hidden" name="cover_id" value="0"/>'+
                    '<input type="hidden" name="intro" placeholder="这是摘要描述"/>'+
                    '<input type="hidden" name="author" placeholder="作者"/>'+
                    '<input type="hidden" name="link" placeholder="外链"/>'+
                    '<textarea style="display:none" name="content"></textarea>'+
                    '<div class="hover_area"><a href="javascript:;" onClick="editItem(this)">编辑</a><a href="javascript:;" onClick="deleteItem(this)">删除</a></div>'+
                '</form>');
	addHtml.insertBefore($('.appmsg_edit_action'));
}
function editItem(_this){
	$(_this).parents('.edit_item').addClass('editing');
	$(_this).parents('.edit_item').siblings().removeClass('editing');
	var index = $(_this).parents('.edit_item').data('index');
	if(index==0){
		$('.edit_area').css('margin-top',0);
	}else{
		$('.edit_area').css('margin-top',index*110+120);
	}
	initForm($(_this).parents('.edit_item'));
}
function deleteItem(_this){
	if(!confirm('确认删除？')) return false;
	
	var item_id = $(_this).parents('.edit_item').find('input[name="id"]').val();
	if(item_id){
		$.post("<?php echo U('del_material_by_id');?>",{id:item_id});
	}
	
	$(_this).parents('.edit_item').remove();
	var curCount = $('.edit_item').size();
	if(curCount==1){
		$('.edit_area').css('margin-top',0);
	}else{
		$('.edit_area').css('margin-top',(curCount-1)*110+120);
	}
	initForm($('.edit_item').eq(curCount-1));
}
function uploadImgCallback(name,id,src){
	$('.editing img').attr('src',src);
	$('.editing input[name="cover_id"]').val(id);
}
function initForm(_item){
	var title = $(_item).find('input[name="title"]').val();
	var author = $(_item).find('input[name="author"]').val();
	var link = $(_item).find('input[name="link"]').val();
	var intro = $(_item).find('input[name="intro"]').val();
	var content = $(_item).find('textarea[name="content"]').val();
	var src = $(_item).find('img').attr('src');
	$('input[name="p_title"]').val(title);
	$('input[name="p_author"]').val(author);
	$('input[name="p_link"]').val(link);
	$('textarea[name="p_intro"]').val(intro);
	if(!content)content=" ";
	if(content){
		imageEditor.setContent(content);
	}
	$('.upload-img-box').show().find('img').attr('src',src);
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