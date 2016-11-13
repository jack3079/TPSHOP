<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;
class CategoryController extends ActionController{
    public function Index(){
        $data = D('Category');
/*         echo"<pre>";
        var_dump($data->relation(true)->select()); */
        $this->assign('Category',$data->tree($data->relation(true)->order("sort desc")->select())); 
        $this->display();
    }
    public function addCategory(){  
        $data = D('Category');
        $this->assign('Category',$data->tree($data->cate_data()));
        $this->display();
    }
    public function add_cate(){
        //$data = D('Category');
        if(IS_POST){
            $this->add('category', 'Category/index');
/*             $data->create();
            if($data->add()){
                $this->success('添加成功！',U('Category/index'));
            }else{
                $this->error('添加失败！');
            } */
        }
    }
    public function editCategory(){
        $data = D('Category');
        $id=I('get.id','','strip_tags');
        if(!empty($id) && $data->Cate_data("id=$id")!=null){
        $cateid=$data->cate_data("id=$id");
        $this->assign('cate',$data->cate_data("id=$id"));
        $this->assign('pid',$cateid[0]["pid"]);
        $this->assign('Category',$data->tree($data->cate_data()));
        $this->display();
        }else{
            $this->error('非法操作！',U('Category/index'));
        }
    }
    public function save_cate(){
        if(IS_POST){
            $data = M('category');
            $id = array('id' => $_POST['id']);
            $data->create();
            if($data->where($id)->save()){
                $this->success('修改成功！',U('Category/index'));
            }else{
                $this->error('修改失败！');
            }
        }else{
            $this->error('非法操作！',U('Category/index'));
        }
    }
    public function del_cate(){
        $cate = D('Category');
        $id=I('get.id','','strip_tags');
        if(!empty($id) && $cate->Cate_data("id=$id")!=null){
           if($this->del('category',$id)){
               $this->success('删除成功！',U('Category/index'));
               }else{
                   $this->error('删除失败！');
           }
        }else{
            $this->error('非法操作！',U('Category/index'));
        }
        
    }
}