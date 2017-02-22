<?php
/**
 *  auth : goto
 *  E-mail : 81557604@qq.com
 *  create_time : 2017/2/22 11:04
 */

/**
 * 设置、获取 配置
 * @param $key
 * @param null $value
 * @return array|mixed|null
 */
function config($key, $value = null){
    if($value == null){
        return \core\library\Config::get($key);
    }else{
        return \core\library\Config::set($key, $value);
    }
}

/**
 * 渲染页面
 * @param null $path
 * @param null $arr
 * @return \core\View|void
 */
function view($path = null, $arr = null){
    $view = new \core\View();
    if(isset($path)){
        $view = $view -> display($path, $arr);
    }
    return $view;
}