<?php

if (!function_exists('input')) {
  
   function input($key = null){

  	     if (strpos($key, '.')) {

  	        list($method, $key) = explode('.', $key, 2);
  	     } else {

  	        $method = 'post';
  	     }

         if($method == 'get'){ 
             return Core\Input::getQuery($key);
         }else{
             return Core\Input::postQuery($key);
         }

   }
}

if (!function_exists('config')) {

    function config($key = null){
        return \Core\Config::get($key);
    }
}

if (!function_exists('db')) {
    function db($key){
         $Model = new \Core\Model();
         $Model->table = $key;
         return $Model;
    }
}
