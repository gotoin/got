<?php
/**
 *  auth : goto
 *  E-mail : 81557604@qq.com
 *  create_time : 2017/2/21 11:25
 */

namespace app\controllers;

use core\view;

class Index
{
    public function index(){
        return view::make('home') -> with('123', '12345');
    }
}