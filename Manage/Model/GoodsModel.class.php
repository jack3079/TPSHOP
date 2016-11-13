<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
 namespace Manage\Model;
 use Think\Model\RelationModel;
 
class GoodsModel extends RelationModel{
    static public $treelist=array();
    
    protected $_link = array (
        'category' => array(
         'mapping_type' => self::BELONGS_TO,
            'mapping_name'=>'cate',
            'mapping_fields'=>'name,id',
            'class_name' => 'category',
            'foreign_key' => 'category'
        ),
        'brand' => array(
            'mapping_type' => self::BELONGS_TO,
            'mapping_name'=>'pinpai',
            'class_name' => 'brand',
            'foreign_key' => 'brand'
        ),
    );
    
    public function shuju($table,$where=array()){
        $goods = M($table);
        $data = $goods->where($where)->select();
        return $data;
    }
     //无限分类
    static function tree($data,$id=0,$level=0){
        $html='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|--';
        foreach ($data as $key=>$val){
            if($val["pid"] == $id){
                $val["level"] = $level;
                $val["html"] = str_repeat($html, $level);
                self::$treelist[] = $val;
                unset($data[$key]);
                self::tree($data,$val["id"],$level+1);
            }
        }
        return self::$treelist;
    }

}