<?php

define('__FRAMEWORK_DIR__', dirname(__FILE__).'/');

define('__WEB_DIR__', dirname(__FILE__));

define('__APP_DIR__', dirname(__FILE__)."/app/");

define('__CONTROLLER__', "App\Controller\\");

define('__CLI__', "App\Cli\\");

define('__CORE_DIR__',  __WEB_DIR__."/core/");

define('__CONFIG_DIR__',  __WEB_DIR__."/config/");

require_once(__FRAMEWORK_DIR__.'core/AutoLoad.php');

spl_autoload_register('Core\AutoLoad::loadClass');

\Core\AutoLoad::loadFunction();