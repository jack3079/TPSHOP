<?php
return array(
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'tpshop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'N_',    // 数据库表前缀
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'LAYOUT_ON' =>  true, // 是否启用布局
    'LAYOUT_NAME' =>  'Public/Common', // 当前布局名称 默认为layout
    //全局过滤
    'DEFAULT_FILTER'        =>  'htmlspecialchars,stripslashes,TrimAll',
    'CopyRight' => 'Copyright©2016  <a href="http://xxx.com" target="_blank">小鱼</a>',
    'Site_Url' => 'http://xxx.com',
    'Site_Name' => '小鱼',
    //错误页面自定义
    'TMPL_EXCEPTION_FILE'   =>  '/Public/404.html',// 异常页面的模板文件
    'SHOW_PAGE_TRACE' =>true,
    'TMPL_ACTION_SUCCESS' => 'public:success',
    'TMPL_ACTION_ERROR' => 'public:error',
);