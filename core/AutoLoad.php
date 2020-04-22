<?php
/**
 * Created by PhpStorm.
 * User: pengfei
 * Date: 2020/4/21
 * Time: 下午3:07
 */

namespace Core;

class AutoLoad
{
    public function __construct()
    {
    }

    public static function loadClass($className)
    {
        $className = lcfirst($className);
        $classFile = str_replace('\\','/',$className).'.php';
        $classFile = __FRAMEWORK_DIR__.$classFile;
        if (file_exists($classFile)){
            require_once($classFile);
        }
    }

    public static function loadFunction()
    {
        require_once(__FRAMEWORK_DIR__.'common/functions.php');
    }
}