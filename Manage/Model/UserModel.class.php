<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
 namespace Manage\Model;
 use Think\Model\RelationModel;

class UserModel extends RelationModel{
    protected $_link =array(
        'rank'=>array(
          'mapping_type' => self::BELONGS_TO,
            'mapping_name' => 'rank',
            'mapping_fields' => 'r_id,r_name',
            'class_name' => 'rank',
            'foreign_key' => 'rank_id'
        )
    );
    
}
