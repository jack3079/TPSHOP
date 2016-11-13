<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
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
<body class="white-bg">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="text-center ibox-title">
<h5>添加关键词</h5>
<div class="ibox-tools">
<a class="collapse-link" title="收起页面">
<i class="fa fa-chevron-up"></i>
</a>

<a href="#" class="close-link" title="隐藏页面">
<i class="fa fa-times"></i>
</a>
</div>
</div>



                            <div class="ibox-content">
                                <form  role="form" id="form" method="post"  class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">关键词名称</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="msg_key"  placeholder="请输入关键词名称">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

 
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">回复类型</label>
                                        <div class="col-sm-10">
                                <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                  <a class="btn btn-white btn-bitbucket" href="#" aria-controls="wenzi" role="tab" data-toggle="tab">
                                      <i class="fa fa-pencil"></i>文字回复
                                  </a>
                                 </li> 
                                  <li role="presentation">
                                  <a class="btn btn-white btn-bitbucket" href="/tpshop/index.php/Manage/Wechat/word_add_tuwen" target="right" >
                                      <i class="fa fa-newspaper-o"></i>图文回复
                                  </a>
                                  </li>
                                  </ul> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">回复内容</label>
                                        <div class="col-sm-10">
                                          <textarea  class="form-control"  name="msg_info" style="height:200px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>


                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <button class="btn btn-primary" type="submit" id="submit">保存内容</button>
                                            <button class="btn btn-white" type="reset">取消</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

</div>
</div>
</div>
<!-- layer 插件 -->
<script src="/tpshop/Public/js/plugins/layer/layer.js"></script>

<script>
 // ajax 提交表单
 $(document).ready(function(){
     $("#submit").click(function(){
         var tourl =  "/tpshop/index.php/Manage/Wechat/save_word_add";
		  $.post(tourl,$("form").serialize(),function(data){
			  if(data['status']==1){
		   layer.msg(data['info'],{icon:1,time:5000,offset:'100px',success:function(){
			   location.href = data['url'];
			   window.parent.frames.left.location.reload();
			   }});     
		  }else{
		   layer.msg(data['info'],{icon:2,time:30000,offset:'100px',cancel:function(){}});			  
			  }
         });
 		 
		// window.location.reload();  
     });
 });
 </script>
</body>
</html>