<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Home\Controller;
use Think\Controller;

class IndexController extends ActionController {
    
    public function index(){
        $where=array('ad_classod'=>1);
        $this->assign('ad',$this->data('ad', $where, 'ad_id desc'));
        $this->assign('adimg',M('ad')->where($where)->find());
       $this->display();
    }
}