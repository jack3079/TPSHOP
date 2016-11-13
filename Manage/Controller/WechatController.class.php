<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class WechatController extends ActionController{
    public function keyword(){
        $where = array('info_type' => 1);
        $data = $this->shuju($where);
        $this->assign('message',$data);
        $this->display();
    }
    public function Save_Event_Text(){
        if(!empty(trim($_POST['msg_info']))){
        if(IS_POST){
            $id = $_POST['msg_id'];
            if(empty($id)){
            $_POST['msg_type'] = 'text';
            $_POST['info_type'] = 1;
            $_POST['createtime'] = time();
            $this->add('message', 'Wechat/keyword', '');
            }else{
                $msgid = array('msg_id' => $id);
                $_POST['msg_type'] = 'text';
                $_POST['info_type'] = 1;
                $_POST['createtime'] = time();
                $this->edit('message', $msgid, 'Wechat/keyword', '');
            }
        }else{
            $this->error('非法操作！');
        }
        }else{
            $this->error('回复内容不能为空！');
        }
    }
    public function Save_Event_Pic(){
        if(IS_POST){
            $id = $_POST['msg_id'];
            if(empty($id)){
                $_POST['msg_type'] = 'image';
                $_POST['info_type'] = 1;
                $_POST['createtime'] = time();
                $this->add('message', 'Wechat/keyword', 'msg_info');
            }else{
                $msgid = array('msg_id' => $id);
                $_POST['msg_type'] = 'image';
                $_POST['info_type'] = 1;
                $_POST['createtime'] = time(); 
                $this->edit('message', $msgid, 'Wechat/keyword', 'msg_info');
            }
        }else{
            $this->error('非法操作！');
        } 
    }
    private function shuju($where,$type='1'){
        if($type==1){
        return  M('message')->where($where)->find();
        }else{
        return  M('message')->where($where)->order('msg_id desc')->select();
        }
    }
    public function word(){
        $this->assign('word',$this->shuju('info_type=0',''));
        $this->display();
    }
    public function word_add(){
        $this->display();
    }
    public function edit_word(){
        $id = I('get.id','','strip_tags');
        $where = array('msg_id'=>$id);
        $this->assign('word',$this->shuju($where));
        $this->display();
    }
    public function save_word_add(){
        $keyword = I('post.msg_key','','TrimAll');
        if(!empty($keyword) && !empty(trim($_POST['msg_info']))){
        if(IS_POST){
            $id = $_POST['msg_id'];
            if(empty($id)){
                if(count($this->shuju(array('msg_key' => $keyword)),'0')>0){
                    $this->error('关键词已存在！');
                }else{
            $_POST['msg_type'] = 'text';
            $_POST['info_type'] = 0;
            $_POST['createtime'] = time();
            $this->add('message', 'Wechat/word_add', '');
                }
            }else{
                $where['msg_key']=$keyword;
                $where['msg_id']=$id;
                if(count($this->shuju($where),'0')>0){
                $_POST['msg_type'] = 'text';
                $_POST['info_type'] = 0;
                $_POST['createtime'] = time();
                $this->edit('message', array('msg_id'=>$id), 'Wechat/word_add', '');  
                }else{
                    $this->error('关键词已存在！');
                }
            }
        }else{
            $this->error('非法操作！');
        }
           
        }else{
            $this->error('关键字或回复内容不能为空！');
        }
    }
    public function del_word(){
        if(IS_AJAX){
            $id = I('post.id','','strip_tags');
            if ($this->del('message', $id)){
                $this->ajaxReturn(true);
            }else{
                $this->ajaxReturn(false);
            }
        }else{
           $this->error('非法操作！');
       }
    }
    public function word_add_tuwen(){
        $this->display();
    }
    //素材部分
    private function sucai_data($table,$where=array(),$order){
       return  M($table)->where($where)->order($order)->select();
    }
    public function sucai(){
        $this->display();
    }   
    public function sucai_add(){
/*         $id = I(get.id,'','trim');
        if(IS_GET){
            $this->assign('sucai',$this->sucai_data('fodder','','sc_id desc'));
        }else{
            $this->assign('sucai',$this->sucai_data('fodder',array('sc_id' => $id),'sc_id desc'));
        } */
        $this->display();
    }   

}