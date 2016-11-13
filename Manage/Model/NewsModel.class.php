<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Model;
use Think\Model\RelationModel;

class NewsModel extends RelationModel{
    protected $_link = array(
        'newscate' => array(
            'mapping_type' => self::BELONGS_TO,
            'mapping_name' => 'cate',
            'class_name' => 'newscate',
            'foreign_key' => 'cate_id'
        )
    );
}