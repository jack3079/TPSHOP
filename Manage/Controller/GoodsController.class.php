<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class GoodsController extends ActionController{
    
    public function Index(){
        $goods=D('goods');
        $count = $goods->count();
        $page = new \Think\Page($count,20);
        $page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $show =$page->show();        
/*         echo "<pre>";
        var_dump($goods->relation(true)->select()); */
        if(IS_POST){
            $where['title'] = array('like','%'.I('post.title','','strip_tags').'%');
            $where['category'] = I('post.category','','strip_tags');
            if(empty($_POST["title"])){
                $data = $goods->where(array('category'=>$_POST["category"]))->relation(true)->order("id desc")->limit($page->firstRow.','.$page->listRows)->select();
            }elseif($_POST["category"]==0){
                $w['title'] = array('like','%'.I('post.title','','strip_tags').'%');
                $data = $goods->where($w)->relation(true)->order("id desc")->limit($page->firstRow.','.$page->listRows)->select();
            }else{
            $data = $goods->where($where)->relation(true)->order("id desc")->limit($page->firstRow.','.$page->listRows)->select();
            }
        }else{
        $data = $goods->relation(true)->order("id desc")->limit($page->firstRow.','.$page->listRows)->select();
        }
        $this->assign('goods',$data);
        $this->assign('page',$show);
        $this->assign('cate',$goods->tree($goods->shuju('category','')));
        $this->display();
    }
    
    public function addGoods(){
        $goods=D('goods');
        $this->assign('cate',$goods->tree($goods->shuju('category','')));
        $this->assign('brand',$goods->shuju('brand',''));
        $this->display();
    }
    
    public function editGoods(){
        $goods=D('goods');
        $id=I('get.id','','strip_tags');
        $data=$goods->relation(true)->where("id = $id")->select();
        $this->assign('goods',$data);
        $this->assign('brand',$goods->shuju('brand',''));
        $this->assign('cate',$goods->tree($goods->shuju('category','')));
        $this->display();
        
    }
    public function save_goods(){
        if(IS_POST){
            $_POST['date']=time();
           $this->add('goods', 'Goods/index', 'photo');
        }else{
            $this->error('非法操作！');
        }
    }
    public function save_editGoods(){
         if(IS_POST){
             $id=array('id'=>I('post.id','','strip_tags'));
             $_POST['date']=time();
             $this->edit('goods',$id,'Goods/index', 'photo');
         }else{
             $this->error('非法操作！');
         }
    }
    public function delGoods(){
        if(IS_AJAX){
            $id = I('post.id','','strip_tags');
            if ($this->del('goods', $id)){
                $this->ajaxReturn(true);
            }else{
                $this->ajaxReturn(false);
            }
        }
        if(IS_GET){
            $good=D('goods');
            $id = I('get.id','','strip_tags');
            if(!empty($id) && $good->shuju('goods',array('id' => $id))!=null){
                if($this->del('goods', $id)){
                    $this->success('删除成功！',U('Goods/index'));
                }else{
                    $this->error('删除失败！');
                }
            }else{
                $this->error('非法操作！');
            }
        }
    
    }
}
 