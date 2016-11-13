<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class ShippingController extends ActionController{
    public function Index(){
        $this->fenye('shipping','','s_id desc', 'shipping', 'page');
        $this->display();
    }
    private function shuju($table,$where=array(),$order=""){
        $data=M($table);
        return $data->where($where)->order($order)->select();
    }
    public function addShipping(){
        $this->display();
    }
    public function save_shipping(){
        if(IS_POST){
            $this->add('shipping', 'Shipping/index', '');
        }else{
            $this->error('非法操作！');
        }
    }
    public function del_shipping(){
        if(IS_AJAX){
            $id = I('post.id','','strip_tags');
            if ($this->del('shipping', $id)){
                $this->ajaxReturn(true);
            }else{
                $this->ajaxReturn(false);
            }
        }
        if(IS_GET){
            $id = I('get.id','','strip_tags');
            $where = array('s_id' => $id);
            if(count($this->shuju('shipping',$where))>0){
                if ($this->del('shipping', $id)){
                    $this->success('删除成功！');
                }else{
                    $this->error('删除失败！');
                }
            }else{
                $this->error('非法操作！',U('Public/index'));
            }
    
        }
    }
}