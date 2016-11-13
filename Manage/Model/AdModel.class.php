<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Model;
use Think\Model;

class AdModel extends Model{
    public function ad($adid){
            $ad = M('ad');
            $id = array('ad_id' => $adid);
            $info = $ad->where($id)->select();
            foreach ($info as $val){
                $data= $val;
            }
            return $data;
        
    }
    public function ad_Data($classid,$keyword){
       $data = M('ad');
       if(empty($classid) and  empty($keyword)){
           $addata = $data->select();
       }else{
           $map['ad_classid'] = $classid;
           $map['ad_name'] = array('like','%'.$keyword.'%');
           $addata = $data->where($map)->select();
       }
       return $addata;
    }
}