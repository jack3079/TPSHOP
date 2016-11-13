<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Home\Controller;
use Think\Controller;

class WechatApiController extends ActionController{
    
    public function Index(){
        echo "<pre>";
        var_dump($this->get_access());
    }
}