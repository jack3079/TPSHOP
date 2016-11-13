<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class ActionController extends ApiController{
     function __construct(){
         parent::__construct();
         $this->quanxian();
         $this->assign('system',$this->systemInfo());
     }
     private function quanxian(){
         if(session('admin')==NULL){
             $this->error('您没有权限，请返回登录！',U('Public/login'));
             die();
         }else{
             $manage = session('admin');
             $this->assign('Manage', $manage['username']);
             $this->assign('Manageid', $manage['id']);
         }
     }

     //上传
     protected function up(){
         $upload = new \Think\Upload();
         $upload->maxSize = C('Upload_Max');
         $upload->exts =  C('Upload_Type');
         $upload->saveName = time().'_'.mt_rand(100,999999);
         $upload->replace = FALSE;
         $upload->autoSub = TRUE;
         $upload->subName = array('date','Ym');
         $upload->rootPath = './Public/';
         $upload->savePath = 'upload/';
         return $upload;
     }
     //添加数据
     protected function add($table,$return_url,$img){
         if(empty($table)){
             $this->error('数据错误！');
         }else{
         $mdata = M($table);
         if(!empty($_FILES[$img]["tmp_name"])){
             $upload = $this->up();
             $info = $upload->upload();
             if($info) {
                 $_POST[$img] = $info[$img]["savepath"].$info[$img]["savename"];
             }else{
                 $this->error($upload->getError());
             }
         }
         $mdata->create();
         if($mdata->add()){
             $this->success('添加成功！',U($return_url));
         }else{
             $this->error('添加失败！');
         }
         }
     }
     //编辑数据
     protected function edit($table,$id,$return_url,$img){
         $data = M($table) ;
         if(!empty($_FILES[$img]["tmp_name"])){
             $upload = $this->up();
             $info = $upload->upload();
             if($info) {
                 $_POST[$img] = $info[$img]["savepath"].$info[$img]["savename"];
             }else{
                 $this->error($upload->getError());
             }
         }
         $data->create();
         if($data->where($id)->save()){
             $this->success('修改成功！',U($return_url));
         }else{
             $this->error('修改失败！');
         }
         
     }
     //删除
     protected function del($table,$id){
         $data = M($table);
         if(is_array($id)){
             $DataID = implode(',',$id);
         }else{
             $DataID = $id;
         }
         if(isset($DataID)){
            return  $data->delete($DataID);
         }
     }
     /* 分页 */
     protected function fenye($table_name,$where='',$order='',$assign,$showpage){
         $shuju = M($table_name);
         $count = $shuju->count();
         $page = new \Think\Page($count,20);
         $page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
         $show =$page->show();
         $data = $shuju->where($where)->order($order)->limit($page->firstRow.','.$page->listRows)->select();
         $this->assign($assign,$data);
         $this->assign($showpage,$show);
         
     }
     public  function _empty(){
         $this->redirect('Public/index');
	}
    }
    