<?php
/**
 * Created by PhpStorm.
 * User: pengfei
 * @Time: 2021/11/30 11:09
 */

namespace App\Services;

use App\Model\User;

class TestService
{
    public function test($id)
    {
        //demo
        //return User::findByIdInfo($id);
        return $id;
    }
}

