<?php
/**
 * Created by PhpStorm.
 * User: pengfei
 * Date: 2020/4/17
 * Time: 上午11:57
 */

namespace App\Cli;

class Test
{
    public function run($params)
    {
        config('app.test');
        var_dump($params);exit;
    }
}