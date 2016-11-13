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
                                <form  role="form" id="form" method="post"  action="/tpshop/index.php/Manage/Wechat/save_text_add" class="form-horizontal" enctype="multipart/form-data" />
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">关键词名称</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="we_keyword"  placeholder="请输入关键词名称">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

 
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">回复类型</label>
                                        <div class="col-sm-10">
                                <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" >
                                  <a class="btn btn-white btn-bitbucket" href="/tpshop/index.php/Manage/Wechat/word_add" target="right" >
                                      <i class="fa fa-pencil"></i>文字回复
                                  </a>
                                 </li> 
                                  <li role="presentation" class="active">
                                  <a class="btn btn-white btn-bitbucket" href="#"  role="tab" data-toggle="tab">
                                      <i class="fa fa-newspaper-o"></i>图文回复
                                  </a>
                                  </li>
                                  </ul> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">图文标题</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="text_titile"  placeholder="请输入图文标题">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div> 
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">图文封面</label>
                                        <div class="col-sm-10">
                                          <input name="text_pic" class="form-control" type="file">
                                          <span class="help-block m-b-none">图片链接，支持JPG、PNG格式，较好的效果为大图720*400，小图400*400</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div> 
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">图文摘要</label>
                                        <div class="col-sm-10">
                                          <textarea  class="form-control"  name="text_about"></textarea>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">回复内容</label>
                                        <div class="col-sm-10">
                                          <textarea id="editor_id"  class="form-control"  name="text_content"  style="height:400px;"></textarea>
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
    <!-- Script kindeditor -->
    <script charset="utf-8" src="/tpshop/Public/kindeditor/kindeditor-all-min.js"></script>
	<script charset="utf-8" src="/tpshop/Public/kindeditor/lang/zh-CN.js"></script>
    <script>
	KindEditor.options.filterMode = false;

	KindEditor.ready(function(K) {
			window.editor = K.create('#editor_id');
	});
    </script>
</body>
</html>