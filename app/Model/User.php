<?php
/**
 * Created by PhpStorm.
 * User: pengfei
 * Date: 2020/4/22
 * Time: 上午10:39
 */

namespace App\Model;

class User extends \Core\Model
{
     public $table = 'users';

     public static function findByIdInfo($id)
     {
         return self::get(['email'],['id' => $id]);
     }
}