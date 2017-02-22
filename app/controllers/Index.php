<?php
/**
 *  auth : goto
 *  E-mail : 81557604@qq.com
 *  create_time : 2017/2/21 11:25
 */

namespace app\controllers;



class Index
{
    public function index(){
        view('home.html', array('test' => 123455));
    }
}