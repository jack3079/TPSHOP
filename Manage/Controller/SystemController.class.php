<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;

use Think\Controller;

class SystemController extends ActionController
{ 
   public  function Index(){
       $this->display();
   }
   public function saveSite(){
       if(IS_POST){
           $upload = $this->up();
           if(!empty($_FILES["logo"]["tmp_name"])){
               $info = $upload->upload();
           if($info) {  
               $_POST['logo'] = $info["logo"]["savepath"].$info["logo"]["savename"];
           }else{  
               $this->error($upload->getError());                
           }
           }
           //二维码
           if(!empty($_FILES["qrcode"]["tmp_name"])){
               $info = $upload->upload();
               if($info) {
                   $_POST['qrcode'] = $info["qrcode"]["savepath"].$info["qrcode"]["savename"];
               }else{
                   $this->error($upload->getError());
               }
           }
           $sys = M('system');            
           $sys->create();
           if($sys->where("id = 0")->save()){
               $this->success('保存成功！');
           }else{
               $this->error('保存失败！');
           }
        }
   }
   //微信
   public function weixin(){
       $this->display();
   }
//短信
   public function sms(){
       $this->display();
   }
   
}