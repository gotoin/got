<?php
/**
 *  auth : goto
 *  E-mail : 81557604@qq.com
 *  create_time : 2017/2/21 10:01
 */

use core\Route;
Route::get('/', '\app\controllers\Index@index');

Route::dispatch();