<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
//define('APP_PATH','./');
//define('BIND_MODULE', 'Manage'); // 绑定Manage模块到当前入口文件
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单