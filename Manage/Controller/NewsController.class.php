<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class NewsController extends ActionController{
    
    public function Index(){
        $news=D('news');
        $count = $news->count();
        $page = new \Think\Page($count,20);
        $page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $show = $page->show();

        if(IS_POST){
            $cate_id = $_POST['cate_id'];
            $keyword = I('post.keyword','','strip_tags,trim');
            if($cate_id==0){
                $where['n_title'] = array('LIKE','%'.$keyword.'%');
                $where['n_type']= array('eq',1);
                $data = $news->where($where)->relation(true)->order('n_id desc')->select();
            }else if(empty($keyword)){
                $where['cate_id']= array('eq',$cate_id);
                $where['n_type']= array('eq',1);
                $data = $news->where($where)->relation(true)->order('n_id desc')->select();
            }else{
                $where['cate_id']= array('eq',$cate_id);
                $where['n_title'] = array('LIKE','%'.$keyword.'%');
                $where['n_type']= array('eq',1);
                $data = $news->where($where)->relation(true)->order('n_id desc')->select();                
            } 
        }else{
            $data = $news->where(array('n_type'=>1))->relation(true)->order('n_id desc')->select();
        }
        
        $this->assign('news',$data);
        $this->assign('cate' ,$this->shuju('newscate',array('c_type'=>1),''));
        $this->assign('page',$show);
        $this->display();
    }
    public function addNews(){
        $this->assign('newscate',$this->shuju('newscate',array('c_type=1'),'c_id desc'));
        $this->display();
    }
    private function shuju($table,$where=array(),$order=""){
        $shuju = M($table);
        $data=$shuju->where($where)->order($order)->select();
        return $data ;
    }
    public function save_news(){
        if (IS_POST){
            $this->add('news', 'News/index', '');
        }else{
            $this->error('非法操作！');
        }
    }
    public function editNews(){
        if(IS_GET){
        $id = I('get.id','','strip_tags,trim');
        $n_id = array('n_id' => $id);
        if(!empty($id) && count($this->shuju('news',$id,''))>0){
        $this->assign('news',$this->shuju('news',$n_id,''));    
        $this->assign('newscate',$this->shuju('newscate',array('c_type=1'),'c_id desc'));
        $this->display();
        }else{
            $this->error('非法操作！');
        }
        }else{
            $this->error('非法操作！');
        }
    }
    public function save_edit_news(){
        if(IS_POST){
            $id = array('n_id'=>$_POST['n_id']);
            $this->edit('news', $id, 'News/index', '');
        }else{
            $this->error('非法操作！');
        }
    }
    public function del_news(){
            if(IS_AJAX){
            $id = I('post.id','','strip_tags');
            if ($this->del('news', $id)){
                $this->ajaxReturn(true);
            }else{
                $this->ajaxReturn(false);
            }
        }
        if(IS_GET){
            $id = I('get.id','','strip_tags');
            $nid=array('n_id' => $id);
            if(!empty($id) && count($this->shuju('news',$nid,''))>0){
                if($this->del('news', $id)){
                    $this->success('删除成功！',U('News/index'));
                }else{
                    $this->error('删除失败！');
                }
            }else{
                $this->error('非法操作！');
            }
        }
    }
 //单页内容管理
    public function about(){
        $news=D('news');
        $data = $news->where(array('n_type'=>0))->relation(true)->order('n_id desc')->select();    
        $this->assign('news',$data);
        $this->display();
    }
    public function addAbout(){
        $this->assign('newscate',$this->shuju('newscate',array('c_type=0'),'c_id desc'));
        $this->display();
    } 
    public function editAbout(){
        if(IS_GET){
            $id = I('get.id','','strip_tags,trim');
            $n_id = array('n_id' => $id);
            if(!empty($id) && count($this->shuju('news',$id,''))>0){
                $this->assign('news',$this->shuju('news',$n_id,''));
                $this->assign('newscate',$this->shuju('newscate',array('c_type=0'),'c_id desc'));
                $this->display();
            }else{
                $this->error('非法操作！');
            }
        }else{
            $this->error('非法操作！');
        }
    }
    public function save_about(){
        if (IS_POST){
            $this->add('news', 'News/about', '');
        }else{
            $this->error('非法操作！');
        }
    }
    public function save_edit_about(){
        if(IS_POST){
            $id = array('n_id'=>$_POST['n_id']);
            $this->edit('news', $id, 'News/about', '');
        }else{
            $this->error('非法操作！');
        }
    }
    public function del_about(){
        if(IS_AJAX){
            $id = I('post.id','','strip_tags');
            if ($this->del('news', $id)){
                $this->ajaxReturn(true);
            }else{
                $this->ajaxReturn(false);
            }
        }
        if(IS_GET){
            $id = I('get.id','','strip_tags');
            $nid=array('n_id' => $id);
            if(!empty($id) && count($this->shuju('news',$nid,''))>0){
                if($this->del('news', $id)){
                    $this->success('删除成功！',U('News/about'));
                }else{
                    $this->error('删除失败！');
                }
            }else{
                $this->error('非法操作！');
            }
        }
    }
}