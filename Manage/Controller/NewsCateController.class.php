<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class NewscateController extends ActionController{
    public function Index(){
        $this->fenye('newscate','','c_type asc','cate', 'page');
        $this->display();
    }
    public function addNewsCate(){        
        $where = array(
            'c_pid' => 0
        );
        $this->assign('category',$this->shuju($where));
        $this->display();
    }
    private function shuju($where){
        $cate = M('newscate');
        $data=$cate->where($where)->order('c_id desc')->select();
        return $data;
    }
    public function add_cate(){
        if(IS_POST){
            $this->add('newscate', 'NewsCate/index', '');
        }else{
            $this->error('非法操作！');
        }
    }
    public function del_cate(){
        if(IS_GET){
            $id = I('get.id','','strip_tags');
           if($this->del('newscate', $id)){
               $this->success('删除成功！',U('NewsCate/index'));
           }else{
               $this->error('删除失败！');
           }
        }else{
             $this->error('非法操作！');
        }
    }
    public function editNewsCate(){
        $id = I('get.id','','strip_tags');
        $where = array(
            'c_id'=>$id
        );
        if(!empty($id) && count($this->shuju($where))>0){
            $this->assign('category',$this->shuju(''));
            $this->assign('cate',$this->shuju($where));
            $this->display();            
        }else{
            $this->error('非法操作！');
        }

    }
    public function save_cate(){
        if(IS_POST){
            $id = array('c_id' => $_POST['c_id']);
            $this->edit('newscate',$id , 'NewsCate/index', '');
        }else{
            $this->error('非法操作！');
        }
    }
}