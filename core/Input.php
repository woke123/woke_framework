<?php

namespace Core;

class Input
{
    
    static public $getQuerys  = array();

    static public $postQuerys = array();
    
    static public function getQuery($key = null)
    {
          
          $querys = self::$getQuerys;

          if(empty($querys)){
             $querys = self::setQuery('get'); 
          }

          if(empty($key)){
          	 return $querys;
          }
          
          return isset($querys[$key]) ? $querys[$key] : null;

    }


    static public function postQuery($key = null)
    {
          
          $querys = self::$postQuerys;
          
          if(emptys($querys)){
              $querys = self::setQuery('post'); 
          }

          if(empty($key)){
          	  return $querys;
          }

          return isset($querys[$key]) ? $querys[$key] : null;

    }
    
    static public function setQuery($method)
    {     
          
          if($method == 'get'){
               $result = self::recursive($_GET);
               self::$getQuerys  = $result;
          }else{
               $result = self::recursive($_POST);
               self::$postQuerys = $result;
          } 
          return $result;
    }

    
    static public function recursive($data,$filter = 'htmlspecialchars')
    {
          $result = array();

          foreach ($data as $key => $val) {

                $result[$key] = is_array($val) ? self::recursive($val, $filter) : call_user_func($filter, $val);

          }
          
          return $result;
    }


}
