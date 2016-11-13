<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Model;
use Think\Model\RelationModel;

class CategoryModel extends RelationModel {
    static public $treelist=array();
    //relation select
    protected $_link = array(
        'category'=>array(
           'mapping_type'  => self::BELONGS_TO,
            'mapping_name' => 'cate',
            'mapping_fields'=>'name',
            'class_name'=>'category',
            'parent_key' =>'pid'
        ),
    );
    
    public function Cate_data($where=array(),$order='sort desc'){
        $data = M('category');
        $cate = $data->where($where)->order($order)->select();
        return $cate;
        
    }
    static function tree($data,$id=0,$level=0){
        //static $treelist = array ();
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