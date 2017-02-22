<?php
/**
 *  auth : goto
 *  E-mail : 81557604@qq.com
 *  create_time : 2017/2/22 11:10
 */

namespace core\library;


class Config
{
    //配置文件
    private static $config = [];

    /**
     * 加载配置文件
     * @param $file
     * @param string $name
     * @return array|mixed
     */
    public static function load($file, $name = ''){
        if(isset($file)){
            $name = strtolower($name);
            return self::set(include $file, $name);
        }
    }

    /**
     * 设置配置参数 $name为数组则为批量
     * @param $name
     * @param $value
     * @return array|mixed
     */
    public static function set($name, $value){
        if(is_string($name)){
            if(!strpos($name, '.')){
                self::$config[strtolower($name)] = $value;
            }else{
                $name = explode('.', $name);
                self::$config[strtolower($name[0])][strtolower($name[1])] = $value;
            }
        }else if(is_array($name)){
            if(!empty($value)){
                self::$config[$value] = isset(self::$config[$value]) ?
                    array_merge(self::$config[$value], $name) : $name;
                return self::$config[$value];
            }else{
                return self::$config = array_merge(self::$config, array_change_key_case($name));
            }
        }else{
            //直接返回
            return self::$config;
        }
    }

    /**
     * 获取配置参数
     * @param null $name
     * @return array|mixed|null
     */
    public static function get($name = null){
        if(empty($name)){
            return self::$config;
        }

        if(strpos($name, '.')){
            //二维
            $name = explode('.', $name);
            return isset(self::$config[strtolower($name[0])][strtolower($name[1])]) ?
                self::$config[strtolower($name[0])][strtolower($name[1])] :null;
        }else{
            return isset(self::$config[strtolower($name)]) ?
                self::$config[strtolower($name)] :null;
        }
    }
}