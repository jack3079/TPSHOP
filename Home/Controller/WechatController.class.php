<?php
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
    private function shuju($where){
        return  M('message')->where($where)->find();
    }
    public function word(){
        $this->display();
    }
    public function word_add(){
        $this->display();
    }
    public function word_add_tuwen(){
        $this->display();
    }
    
    

}