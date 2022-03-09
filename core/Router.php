<?php
/*
 * from ci framework
 *
 */

namespace Core;

use Core\Input;

class Router
{

   public function run()
   {
 
     	$uri = parse_url('http://dummy'.$_SERVER['REQUEST_URI']);  
        
		$uri = isset($uri['path']) ? $uri['path'] : '';
        
        if(strpos($uri,'index.php')){
        	$uri = str_replace('index.php', '', $uri);
        }

        $suffix = strpos($uri,'.');

        if($suffix){   
            $uri = substr($uri,-strlen($uri),$suffix);
        }

		if (isset($_SERVER['SCRIPT_NAME'][0]))
		{
			if (strpos($uri, $_SERVER['SCRIPT_NAME']) === 0)
			{
				$uri = (string) substr($uri, strlen($_SERVER['SCRIPT_NAME']));
			}
			elseif (strpos($uri, dirname($_SERVER['SCRIPT_NAME'])) === 0)
			{
				$uri = (string) substr($uri, strlen(dirname($_SERVER['SCRIPT_NAME'])));
			}
		}

		$uris = array();
		$tok = strtok($uri, '/');
		while ($tok !== FALSE)
		{
			if (( ! empty($tok) OR $tok === '0') && $tok !== '..')
			{
				$uris[] = $tok;
			}
			$tok = strtok('/');
		} 

        return $this->loadClass($uris[0],$uris[1]);
 
   }
   
   public function loadClass($controller,$method)
   { 
		$class      = ucfirst($controller);
		$obj        = __CONTROLLER__ . $class;
		$class = new $obj();
		return $class->$method();
   }
   
}

 