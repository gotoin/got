<?php
/**
 *  auth : goto
 *  E-mail : 81557604@qq.com
 *  create_time : 2017/2/22 12:21
 */

namespace core;


use Illuminate\Database\Capsule\Manager;

class Model extends \Illuminate\Database\Eloquent\Model{
    public function __construct(array $attributes = [])
    {
        $capsule = new Manager;
        $capsule -> addConnection(require BASE_PATH . '/config/database.php');
        $capsule -> bootEloquent();
        parent::__construct($attributes);
    }
}