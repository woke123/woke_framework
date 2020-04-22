<?php

namespace Core;

class Model
{
    public static $medoo;

    public $table;

    public function __construct()
    {
    }

    public static function __callStatic($method,$arg)
    {
        $static = new static();
        array_unshift($arg,$static->table);
        return call_user_func_array([self::getInstance(), $method], $arg);
    }

    public function __call($method,$arg)
    {
        array_unshift($arg,$this->table);
        return call_user_func_array([$this::getInstance(), $method], $arg);
    }

    public static function getInstance()
    {
        if(!(self::$medoo instanceof Medoo)){
            $databases = config('databases.db');
            $options = [
                'database_type' => $databases['type'],
                'database_name' => $databases['dbname'],
                'server'        => $databases['host'],
                'port'          => $databases['port'],
                'username'      => $databases['username'],
                'password'      => $databases['password'],
                'prefix'        => $databases['prefix']
            ];
            self::$medoo = new Medoo($options);
        }
        return self::$medoo;
    }
}