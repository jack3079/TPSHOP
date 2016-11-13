<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class OrderController extends ActionController{
    public function Index(){
        $shuju = D('order');
        $count = $shuju->count();
        $page = new \Think\Page($count,20);
        $page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $show =$page->show();
        if(IS_POST){
            $status = $_POST['status'];
            $time_start = strtotime($_POST['start']);
            $time_end = strtotime($_POST['end']);
            $number = I('post.number','','trim');
            if(empty($time_start) && empty($time_end) && empty($number) && $status != 100){
               $where['status'] = array('eq',$status);
               $data = $shuju->where($where)->relation(true)->order('o_id desc')->limit($page->firstRow.','.$page->listRows)->select();
            }elseif (empty($number) && $status == 100){
                $where['order_time'] = array('BETWEEN',array($time_start,$time_end));
                $data = $shuju->where($where)->relation(true)->order('o_id desc')->limit($page->firstRow.','.$page->listRows)->select();
            }elseif (empty($time_start) && empty($time_end) && $status == 100){
                $where['number'] = array('eq',$number);
                $data = $shuju->where($where)->relation(true)->order('o_id desc')->limit($page->firstRow.','.$page->listRows)->select();
            }else{
                $where['status'] = array('eq',$status);
                $where['order_time'] = array('BETWEEN',array($time_start,$time_end));
                $where['number'] = array('eq',$number);
                $data = $shuju->where($where)->relation(true)->order('o_id desc')->limit($page->firstRow.','.$page->listRows)->select();
            }
        }else {
            $data = $shuju->relation(true)->order('o_id desc')->limit($page->firstRow.','.$page->listRows)->select();
        }
        
        $this->assign('order',$data);
        $this->assign('page',$show);
        $this->display();
    }
     private function shuju($table,$where=array(),$field=""){
         $data = M($table)->field($field)->where($where)->select();
         return $data;
     }
    public function view(){
        $id=trim($_REQUEST['id']);
        if(!empty($id) && count($this->shuju('order',array('o_id'=>$id),''))>0) {
        $order= D('order');
        $where = array(
            'o_id'=>I('get.id','','strip_tags')
        );
        $data = $order->where($where)->relation(true)->select();
        $rankid=$data[0]["user"]["rank_id"];
//         echo "<pre>";
//         var_dump();
        $this->assign('zhekou',$this->shuju('rank',array('r_id'=>$rankid),'discounts'));
        $this->assign('kuaidi',$this->shuju('shipping','',''));
        $this->assign('order',$data);
        $this->display();
        }else {
            $this->error('非法操作！');
        }
    }
    public function save_kuaidi(){
        if(IS_POST){
           $order=D('order');
           $id=$_POST['o_id'];
           $oid=array('o_id'=>$id);
           $order->shipping_id = $_POST['shipping_id'];
           $order->k_number = I('post.k_number','trim,strip_tags');
           $order->f_time = time();
           $order->status = 2;
           if($order->where($oid)->save()){
              $this->success('已发货成功！');
           }else {
               $this->success('发货失败！');
           }
        }else{
            $this->error('非法操作！');
        }
    }
    public function quxiao(){
        $id=trim($_REQUEST['id']);
        $oid=array('o_id'=>$id);
        if(!empty($id) && count($this->shuju('order',$oid,''))>0) {           
            $order=D('order');
            $order->status = 4;//取消订单
            if($order->where($oid)->save()){
                $this->success('订单已取消！');
            }else {
                $this->success('操作失败！');
            }
        }else{
            $this->error('非法操作！');
        }
    }
    public function order_print(){
        $this->view();
    }
    public function del_order(){
        if(IS_AJAX){
            $id = I('post.id','','strip_tags');
            if ($this->del('order', $id)){
                $this->ajaxReturn(true);
            }else{
                $this->ajaxReturn(false);
            }
        }
        if(IS_GET){
            $id = I('get.id','','strip_tags');
            $oid=array('o_id' => $id);
            if(!empty($id) && count($this->shuju('order',$oid,''))>0){
                if($this->del('order', $id)){
                    $this->success('删除成功！',U('Order/index'));
                }else{
                    $this->error('删除失败！');
                }
            }else{
                $this->error('非法操作！');
            }
        }

    }
}