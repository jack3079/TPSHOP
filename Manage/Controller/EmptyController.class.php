<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;
class EmptyController extends Controller{
    public function _empty(){
        $this->redirect("Public/index");
    }
}