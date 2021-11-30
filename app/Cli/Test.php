<?php
/**
 * Created by PhpStorm.
 * User: pengfei
 * Date: 2020/4/17
 * Time: 上午11:57
 */

namespace App\Cli;

use App\Services\TestService;

class Test
{
    // php artisan test run date=2021
    public function run($params)
    {
        // demo
         $user = (new TestService())->test(1);
         var_dump($user);
    }
}