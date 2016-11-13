<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class BrandController extends ActionController{
    public function Index(){
       $this->fenye('brand','','srot desc', 'brand', 'page');
        $this->display();
    }
    private function brandData($where=''){
        $data = M('brand');
        $brand = $data->where($where)->select();
        return $brand;
    }
    public function addBrand(){
        $this->display();
    }
    public function editBrand(){
        $id=I('get.id','','strip_tags');
        if(!empty($id) && $this->brandData("b_id = $id")!=null){
        $this->assign('brand',$this->brandData("b_id = $id"));
        $this->display();
        }else{
            $this->error('非法操作！');
        }
    }
    public function save_brand(){
        $this->add('brand', 'Brand/index', 'brand_pic');
    }
    public function edit_brand(){
        if(IS_POST){
            $id = array(
              'b_id' => $_POST['b_id']  
            );
            $this->edit('brand', $id, 'Brand/index', 'brand_pic');
        }else{
            $this->error('非法操作！');
        }
    }
    public function del_brand(){
        if(IS_AJAX){
            $id = I('post.id','','strip_tags');
            if ($this->del('brand', $id)){
                $this->ajaxReturn(true);
            }else{
                $this->ajaxReturn(false);
            }
        }
        if(IS_GET){
            $id = I('get.id','','strip_tags');
            if(!empty($id) && $this->brandData("b_id = $id")!=null){
                if($this->del('brand', $id)){
                    $this->success('删除成功！',U('Brand/index'));
                }else{
                    $this->error('删除失败！');
                }
            }else{
                $this->error('非法操作！');
            }
        }

    }
    
}