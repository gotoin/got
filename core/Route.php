<?php
/**
 *  auth : goto
 *  E-mail : 81557604@qq.com
 *  create_time : 2017/2/21 10:02
 */

namespace core;

class Route
{

    protected static $callbacks = array();
    protected static $routes = array();
    protected static $methods = array();


    protected static $patterns = array(
        ':any' => '[^/]+',
        ':num' => '[0-9]+',
        ':all' => '.*'
    );

    public static function __callStatic($name, $arguments)
    {
     //   $uri = dirname($_SERVER['PHP_SELF']).'/'.$arguments[0];
        $uri = '/'.$arguments[0];
        $callback = $arguments[1];

        array_push(self::$methods, strtoupper($name));
        array_push(self::$routes, $uri);
        array_push(self::$callbacks, $callback);
    }

    /**
     * 执行路由
     */
    public static function dispatch(){
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $method = $_SERVER['REQUEST_METHOD'];

        $key = array_keys(self::$patterns);
        $val = array_values(self::$patterns);

        self::$routes = preg_replace('/\/+/', '/', self::$routes);

        if(in_array($uri, self::$routes)){
            $rou = array_keys(self::$routes, $uri);//取出所有匹配路由的键
            foreach ($rou as $route){
                if(self::$methods[$route] == $method || self::$methods[$route] ==  'ANY'){
                    if (is_object(self::$callbacks[$route])){
                        call_user_func(self::$callbacks[$route]);
                    }else{
                        //$parts = explode('/', self::$callbacks[$route]);
                        //$last = end($parts);
                        $seg = explode('@', self::$callbacks[$route]);
                        $controller = new $seg[0]();
                        echo $controller -> {$seg[1]}();  //执行控制器方法
                    }
                }
            }
        }
    }


}