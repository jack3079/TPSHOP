<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Model;
use Think\Model\RelationModel;

class OrderModel extends RelationModel{
    protected $_link = array(
        'user'=>array(
            'mapping_type' => self::BELONGS_TO,
            'mapping_name' => 'user',
            'class_name' => 'user',
            'foreign_key' => 'u_id',
        ),
        'goods' => array(
            'mapping_type' => self::BELONGS_TO,
            'mapping_name' => 'goods',
            'class_name' => 'goods',
            'foreign_key' => 'goods_id'
        ),
        'shipping' => array(
            'mapping_type' => self::BELONGS_TO,
            'mapping_name' => 'shipping',
            'class_name' => 'shipping',
            'foreign_key' => 'shipping_id'
        ),
        'pay' => array(
            'mapping_type' => self::BELONGS_TO,
            'mapping_name' => 'pay',
            'class_name' => 'pay',
            'foreign_key' => 'pay_id'
        )
    );
}