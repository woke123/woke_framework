<?php
/**
 * Created by PhpStorm.
 * User: pengfei
 * Date: 2020/4/17
 * Time: 上午11:41
 */

namespace Core;

class Controller
{
    public function __construct()
    {

    }

    protected static function responseOk($data = [],$msg = 'success')
    {
        $error = [
            'code' => 200,
            'msg' => $msg,
            'data' => $data
        ];
        return json_encode($error);
    }

    protected static function responseError($msg = 'error')
    {
        $error = [
            'code' => 500,
            'msg' => $msg,
            'data' => []
        ];
        return json_encode($error);
    }

}