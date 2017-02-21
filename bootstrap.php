<?php
/**
 *  auth : goto
 *  E-mail : 81557604@qq.com
 *  create_time : 2017/2/21 14:23
 */
define("BASE_PATH", __DIR__);
define('VIEW_EXT', 'html');

date_default_timezone_set('Asia/Shanghai');
//autoload自动载入
require '../vendor/autoload.php';


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();




//路由配置
require BASE_PATH . '/config/routes.php';

