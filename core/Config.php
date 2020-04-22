<?php
/**
 * Created by PhpStorm.
 * User: pengfei
 * Date: 2020/4/17
 * Time: 下午5:34
 */

namespace Core;

class Config
{
    static public $config  = array();

    static public function get($key = null)
    {
        $keys  = explode('.', $key);
        $datas = self::loadData($keys[0]);
        unset($keys[0]);
        foreach ($keys as $k){
            if(!isset($datas[$k])){
                $datas = null;
                break;
            }
            $datas = $datas[$k];
        }
        return $datas;
    }

    static public function set($key = null)
    {

    }

    static public function loadData($filename)
    {
        if(isset(self::$config[$filename])){
            return self::$config[$filename];
        }
        $data = require_once(__CONFIG_DIR__."$filename.php");
        self::$config[$filename] = $data;
        return $data;
    }
}