<?php 

namespace Core;

use Core\Router;

class Framework
{
   
   public $Router;

   public function __construct()
   { 
   	   $this->Router = new Router(); 
   }

   public function run()
   {
       return $this->Router->run();
   }

 }
