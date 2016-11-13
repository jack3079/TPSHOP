<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class UserController extends ActionController {
    
    public function Index(){
        
        $user=D('user');
        $count = $user->count();
        $page = new \Think\Page($count,20);
        $page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $show =$page->show();
        if(IS_POST){
            $where['user_name'] = array('like','%'.I('post.keyword','','strip_tags').'%');
            $where['mobile'] = array('like','%'.I('post.keyword','','strip_tags').'%');
            $where['rank_id'] = I('post.rank_id','','strip_tags');
            $where['_logic'] = 'OR';
            if(empty($_POST["keyword"])){
                $data = $user->where(array('rank_id'=>$_POST["rank_id"]))->relation(true)->order("uid desc")->limit($page->firstRow.','.$page->listRows)->select();
            }elseif($_POST["rank_id"]==0){
                $w['user_name'] = array('like','%'.I('post.keyword','','strip_tags').'%');
                $w['mobile'] = array('like','%'.I('post.keyword','','strip_tags').'%');
                $w['_logic'] = 'OR';
                $data = $user->where($w)->relation(true)->order("uid desc")->limit($page->firstRow.','.$page->listRows)->select();
            }else{
                $data = $user->where($where)->relation(true)->order("uid desc")->limit($page->firstRow.','.$page->listRows)->select();
            }
        }else{
            $data = $user->relation(true)->order("uid desc")->limit($page->firstRow.','.$page->listRows)->select();
        }
        
        $this->assign('user',$data);
        $this->assign('rank',$this->shuju('rank'));
        $this->assign('page',$show);
        $this->display();
    }
    public function addUser(){
        $this->assign('rank',$this->shuju('rank'));
        $this->display();
    }
    public function editUser(){
        $UserData=D('user');
        $id=I('get.id','','strip_tags');
        $uid = array('uid' => $id);
        if(!empty($id) && count($this->shuju('user',$uid))>0){
        $this->assign('user',$this->shuju('user',$uid));
        $this->assign('rank',$this->shuju('rank'));
        $this->assign('shangji',$this->shuju('user'));
        $this->display();
        }else{
            $this->error('非法操作！');
        }
    }
    private function shuju($table,$where=array(),$order=""){
        $data = M($table);
        return  $data->where($where)->order($order)->select();
    }
    public function save_user(){
          if(IS_POST){
              $_POST["pass"] = md5(I('post.pass','','strip_tags'));
              $_POST["tixian_pass"] = md5(I('post.tixian_pass','','strip_tags'));
              $_POST["time"] = strtotime(I('post.time','','strip_tags'));
              $this->add('user', 'User/index', '');
          }else{
              $this->error('非法操作！');
          } 
    }
    public function check_mobile(){
        $phone = array('mobile'=> $_REQUEST["mobile"]);
        if(count($this->shuju('user',$phone,'uid desc'))>0){
            echo "false";
        }else {
            echo "true";
        }
    }
    public function del_user(){
            if(IS_AJAX){
            $id = I('post.id','','strip_tags');
            if ($this->del('user', $id)){
                $this->ajaxReturn(true);
            }else{
                $this->ajaxReturn(false);
            }
        }
        if(IS_GET){
            $id = I('get.id','','strip_tags');
            $uid=array('uid' => $id);
            if(!empty($id) && count($this->shuju('user',$uid,''))>0){
                if($this->del('user', $id)){
                    $this->success('删除成功！',U('User/index'));
                }else{
                    $this->error('删除失败！');
                }
            }else{
                $this->error('非法操作！');
            }
        }
    }
    public function save_edit_user(){
        if(IS_POST){
            $id= array('uid' => $_POST['uid']);
            $_POST["pass"] = md5(I('post.pass','','strip_tags'));
            $_POST["tixian_pass"] = md5(I('post.tixian_pass','','strip_tags'));
            $_POST["time"] = strtotime(I('post.time','','strip_tags'));
            $this->edit('user',$id,'User/index', '');
        }else{
            $this->error('非法操作！');
        }
    }
}