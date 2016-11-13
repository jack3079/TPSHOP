<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class RankController extends ActionController{
    public function Index(){
        $this->assign('rank',$this->rank_data());
        $this->display();
    }
    private function rank_data($where=array()){
       $rank = M('rank');
       $data = $rank->where($where)->order("r_id desc")->select();
       return  $data;
    }
    public function addRank(){

        $this->display();
    }
    public function editRank(){
        $id= I('get.id','','strip_tags');
        $rid=array('r_id' => $id);
        if(!empty($id) && $this->rank_data($rid)!=null){
            $this->assign('rank',$this->rank_data($rid));
            $this->display();
        }else {
            $this->error('非法操作！');
        }
    }
    public function save_rank(){
        if(IS_POST){
            $this->add('rank', 'Rank/index', '');
        }else{
            $this->error('非法操作！');
        }
    }
    public function save_edit_rank(){
        if(IS_POST){
            $id= array('r_id' => $_POST['r_id']);
            $this->edit('rank',$id,'Rank/index', '');
        }else{
            $this->error('非法操作！');
        }
    }
    public function del_rank(){
        $id= I('get.id','','strip_tags');
        $rid=array('r_id' => $id);
        if(!empty($id) && $this->rank_data($rid)!=null){
            if($this->del('rank', $id)){
                $this->success('删除成功！',U('Rank/index'));
            }else{
                $this->error('删除失败！');
            }
        }else {
            $this->error('非法操作！');
        }
    }

}