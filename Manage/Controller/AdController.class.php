<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class AdController extends ActionController{
    public function index(){
        $data = D('ad');
        $classid = I('post.ad_classid','','strip_tags');
        $adname = I('post.ad_name','','strip_tags');
        $this->assign('ad',$data->ad_Data($classid,$adname));
        $this->display();
    }
    public function addAd(){
        $this->display();
    }
    Public function save_ad(){                                                           
        if(IS_POST){
            $Data = M('ad');
            $this->upimg();
            $Data->create();
            if($Data->add()){
                $this->success('添加成功！',U('Ad/index'));
            }else{
                $this->error('添加失败');
            }
        }
    }
    private function upimg(){
        $upload = $this->up();
        if(!empty($_FILES["ad_img"]["tmp_name"])){
            $info = $upload->upload();
            if($info) {
                $_POST["ad_img"] = $info["ad_img"]["savepath"].$info["ad_img"]["savename"];
            }else{
                $this->error($upload->getError());
            }
        }
    }
    public function editAd(){
        $Addata = D('ad');
        $id  = $_REQUEST["adid"];
        if(!empty($id) && $Addata->ad($id) !== NULL){
        $this->assign('ad',$Addata->ad($id));
        $this->display();
        }else{
            $this->error('数据不存在！',U('Public/index'));
        }
    }
    public function save_edit(){
        if(IS_POST){
            $Addata = M('ad');
            $adid = array('ad_id' => $_POST['ad_id']);
            $this->upimg();
            $Addata->create();
            if($Addata->where($adid)->save()){
                $this->success('编辑成功！',U('Ad/index'));
            }else{
                $this->error('编辑失败！');
            }
        }else{
            $this->error('非法操作！',U('Public/index'));
        }
    }
    public function delAd(){
        if(IS_AJAX){
        $id = I('post.id','','strip_tags');       
        if ($this->del('ad', $id)){
            $this->ajaxReturn(true);
        }else{
            $this->ajaxReturn(false);
        } 
        }
        if(IS_GET){
            $id = I('get.adid','','strip_tags');
            $ad=M('ad');
            $data=$ad->where("ad_id = $id")->select();
            if(count($data)>0){
                if ($this->del('ad', $id)){
                    $this->success('删除成功！');
                }else{
                    $this->error('删除失败！');
                }                
            }else{
                $this->error('非法操作！',U('Public/index'));
            }

        }
    }
}