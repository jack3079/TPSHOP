<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
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
<body class="white-bg">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="text-center ibox-title">
<h5>关键词自动回复设置</h5>
<div class="ibox-tools">
<a class="collapse-link" title="收起页面">
<i class="fa fa-chevron-up"></i>
</a>
<a title="添加关键词" href="/KeNong/index.php/Manage/Wechat/word_add" target="right" >
<i class="fa fa-plus text-navy"></i>
</a>
<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="删除关键词">
    <i class="fa  fa-trash-o text-danger"></i>
</a>
<ul class="dropdown-menu dropdown-user">
    <li><a id="quanxuan" >全选</a></li>
    <li><a id="fanxuan" >反选</a></li>
    <li><a id="quxiao" >取消</a></li>
    <li><a id="shanchu" >删除</a></li>
</ul>
<a href="#" class="close-link" title="隐藏页面">
<i class="fa fa-times"></i>
</a>
</div>
</div>

<div class="ibox-content">
<div class="panel panel-default">
<!-- Default panel contents -->
<div class="panel-heading"><h4>关键词列表</h4></div>

<!-- Table -->
<table class="table table-striped  table-hover text-center">
<tbody>
<?php if(is_array($word)): $i = 0; $__LIST__ = $word;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td> <input type="checkbox"  class="i-checks"  value="<?php echo ($vo["msg_id"]); ?>" name="msg_id[]">
<span><?php echo ($vo["msg_id"]); ?></span>
</td>
<td><?php echo ($vo["msg_key"]); ?></td>
<td>
<a href="/KeNong/index.php/Manage/Wechat/edit_word/id/<?php echo ($vo["msg_id"]); ?>" target="right"><i class="fa fa-edit text-navy"></i></a>
</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>

</table>
</div>
</div>

</div>
</div>
</div>  
    <!--批量删除-->
    <script type="text/javascript" src="/KeNong/Public/js/checkbox.js"></script>
	<script>
    $(function(){
        $("#quanxuan").bind('click',function(){
            $(".i-checks").quanxuan();
            });
            $("#quxiao").bind('click',function(){
                $(".i-checks").quxiao();
                });
            $("#fanxuan").bind('click',function(){
                $(".i-checks").fanxuan();
                });	
            $("#shanchu").bind('click',function(){
                var xiaoyu= $(".i-checks").is(":checked");
                if(xiaoyu==false){
                    alert("您还没有选择要删除的选项！");
                }else{
                if(confirm("您确定要删除所有选中的数据吗？")){
                    var array = new Array();
                    $(".i-checks:checked").each(function(){
                        array.push($(this).val());
                    });
                    $.ajax({ 
                        type:"POST",
                        url:"/KeNong/index.php/Manage/Wechat/del_word",
                        data:"id="+array,
                        success: function(msg){
							if(msg==false){
								alert("删除失败！");
								}else{
									$(".i-checks:checked").parents("tr").remove();
									}
                            }
                        });
                    }else{
                    $(".i-checks").quxiao();
                    }
                }
                });
        });
    </script>

</body>
</html>