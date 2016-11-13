<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class PayController extends ActionController{
    public function alipay(){
        $where=array(
            'paytype'=>'alipay'
        );
        $alipay = $this->shuju($where);
        $payconfig = unserialize($alipay['payconfig']);
/*         echo "<pre>";
        var_dump($payconfig); */
        $this->assign('payconfig',$payconfig);
        $this->assign('pay',$alipay);
        $this->display();
    }
    private function shuju($where=array()){
        $pay = M('pay');
        $data = $pay->where($where)->find();
        return $data;
    }
    public function save_alipay(){
        if(IS_POST){
            $payid=$_POST['payid'];
            $data['alipay'] = I('post.alipay','','trim');
            $data['aliid'] = I('post.aliid','','trim');
            $data['alikey'] = I('post.alikey','','trim');
            $_POST['payconfig'] = serialize($data);
            $_POST['payname'] = "支付宝支付";
            $_POST['paytype'] = "alipay";
            $_POST['paystatus'] = $_POST['paystatus'];
            if(empty($payid)){
                $this->add('pay', 'Pay/alipay', '');
            }else{
                $this->edit('pay', array('payid'=>$payid), 'Pay/alipay', '');
            }
            
        }else{
            $this->error('非法操作!');
        }
    }
    public function wxpay(){
        $where=array(
            'paytype'=>'wxpay'
        );
        $alipay = $this->shuju($where);
        $payconfig = unserialize($alipay['payconfig']);
        $this->assign('payconfig',$payconfig);
        $this->assign('pay',$alipay);
        $this->display();
    }
    public function save_wxpay(){
        if(IS_POST){
            $payid=$_POST['payid'];
            $data['appid'] = I('post.appid','','trim');
            $data['appsecret'] = I('post.appsecret','','trim');
            $data['key'] = I('post.key','','trim');
            $data['mchid'] = I('post.mchid','','trim');
            $_POST['payconfig'] = serialize($data);
            $_POST['payname'] = "微信支付";
            $_POST['paytype'] = "wxpay";
            $_POST['paystatus'] = $_POST['paystatus'];
            if(empty($payid)){
                $this->add('pay', 'Pay/wxpay', '');
            }else{
                $this->edit('pay', array('payid'=>$payid), 'Pay/wxpay', '');
            }
    
        }else{
            $this->error('非法操作!');
        }
    }
}