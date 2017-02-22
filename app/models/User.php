<?php
/**
 *  auth : goto
 *  E-mail : 81557604@qq.com
 *  create_time : 2017/2/22 14:00
 */

namespace app\models;


use core\Model;

class User extends Model {
    public $primaryKey = 'user_id';
    public $timestamps = false;
}