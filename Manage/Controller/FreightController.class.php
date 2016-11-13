<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class FreightController extends ActionController{
    public function Index(){       
        $this->fenye('freight','','f_id desc', 'freight', 'page');
        $this->assign('data',$this->shuju('shipping'));
        $this->assign('china',$this->shuju('china'));
        $this->display();
    }
    private function shuju($table,$where=array(),$order=""){
        $data=M($table);
        return $data->where($where)->order($order)->select();
    }
    private function china(){
        $json=file_get_contents('public/js/china.json');
        $china=json_decode($json);
        return $china;
    }
    public function addFreight(){
        foreach($this->china() as $val){
            if($val->pid == 0){
                $list_name[]=$val;
            }
        }
        $this->assign('china',$list_name);
        $this->assign('shipping',$this->shuju('shipping','','s_id desc'));
        $this->display();
    }
    public function save_freight(){
        if(IS_POST){
            if(!empty($_POST['f_area'])){
            $_POST['f_area'] = implode(',', $_POST['f_area']);
            $this->add('freight', 'Freight/index', '');
            }else{
                 $this->error('运送范围不能为空！');
            }
        }else{
            $this->error('非法操作！');
        }
    }
    public function del_freight(){
        if(IS_AJAX){
            $id = I('post.id','','strip_tags');
            if ($this->del('freight', $id)){
                $this->ajaxReturn(true);
            }else{
                $this->ajaxReturn(false);
            }
        }
        if(IS_GET){
            $id = I('get.id','','strip_tags');
            $fid=array('f_id' => $id);
            if(!empty($id) && count($this->shuju('freight',$fid,''))>0){
                if($this->del('freight', $id)){
                    $this->success('删除成功！',U('Freight/index'));
                }else{
                    $this->error('删除失败！');
                }
            }else{
                $this->error('非法操作！');
            }
        }
    }
}