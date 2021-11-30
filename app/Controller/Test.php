<?php

namespace App\Controller;

use Core\Controller;
use App\Services\TestService;

class Test extends Controller
{

    public function lists()
    {
        //db functions
        // $user = db('users')->get(['email'],['id' => 1]);

        $user = (new TestService())->test(1);
        var_dump($user);

        //$User = new User();
        //$user = $User->findByIdInfo(1);

        //$User = new User();
        //var_dump($User->findByIdInfo(1));exit;


        //get input params
        //$result = input('get.');
        //$result = input('post.');

        //get config
        //config('app.res.host.ip')

    	return $this->responseOk($user);
    }

}