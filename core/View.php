<?php
/**
 *  auth : goto
 *  E-mail : 81557604@qq.com
 *  create_time : 2017/2/21 14:31
 */

namespace core;


class View extends \Twig_Environment {


    public function __construct(){
        $loader = new \Twig_Loader_Filesystem(BASE_PATH . "/app/views/");
        parent::__construct($loader, array(
            'cache' =>  config('CACHE_PATH'),
            'debug' => config('DEBUG'),
        ));
    }


    /*  const VIEW_PATH = "app/views/";

      protected $view;
      protected $data;

      public function __construct($view){
          $this -> view = $view;
      }

      public static function make($view_name = null){
          $view_path = self::get_view_path($view_name);
          if(is_file($view_path)){
              return new View($view_path);
          }else{
              throw new UnexpectedValueException("视图文件不存在！");
          }
      }

      /**
       * 获取视图目录
       * @param $view_name
       * @return string
       */
 /*   protected static function get_view_path($view_name){
        $replace = str_replace('.', '/', $view_name);
        return BASE_PATH . '/' . self::VIEW_PATH . $replace . '.' . VIEW_EXT;
    }


    public function with($key, $value = null){
        $this -> data[$key] = $value;
        return $this;
    }*/


}