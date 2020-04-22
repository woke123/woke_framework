<?php
/**
 * Created by PhpStorm.
 * User: pengfei
 * Date: 2020/4/22
 * Time: 上午10:39
 */

namespace App\Model;

use Core\Model;

class User extends Model
{
     public $table = 'users';

     public function findByIdInfo($id)
     {
         return $this->get(['email'],['id' => $id]);
     }
}