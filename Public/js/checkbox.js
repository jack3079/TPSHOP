// JavaScript Document
//全选，删除插件
jQuery.fn.extend({
	//选中所有CHECKBOX复选框
quanxuan:function(){
	this.prop('checked',true);
	},
	//取消所有CHECKBOX复选框
quxiao:function(){
	this.prop('checked',false);
	},
	//反选所有CHECKBOX复选框
fanxuan:function(){
	//循环遍历出所有复选框
	for(var i=0;i<this.length;i++){
		//如果当前CHECKBOX已选中
		if(this[i].checked==true){
			//则当前复选框取消选择
			this[i].checked=false;
			}else{
				//反之则选中所有复选框
				this[i].checked=true;
			}
		}
	}
});