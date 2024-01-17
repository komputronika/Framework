<?php
//-----------------------------------
//--- Vendor autoload
//-----------------------------------
require_once ("./vendor/autoload.php");

//-----------------------------------
//--- Define path
//-----------------------------------

define ('DS', DIRECTORY_SEPARATOR);
// App path ended with trailing "/"
define('APP_PATH', dirname(__FILE__) . DS . "app" . DS );

//-----------------------------------
//--- Load environtment
//-----------------------------------
$env = parse_ini_file("./.env",false);
foreach($env as $key => $val){
    if (!is_array($var)) 
    {
        putenv("$key=$val");
    }
}
$env = getenv('app_environtment');

//-----------------------------------
//--- Bootstraping
//-----------------------------------
require "./core/bootstrap.php";

//-----------------------------------
//--- Instantiate router class
//-----------------------------------

// require "./core/Classes/Router.php";
// $router = new Router();

//-----------------------------------
//--- Load router definition
//-----------------------------------
// require "./app/Config/Router.php";

//-----------------------------------
//--- Run app
//-----------------------------------
// $app = Framework\Engine;
// $app->run( $router )

//-----------------------------------
//--- Test
//-----------------------------------
use Framework\Testclass;

$test = new Testclass;
$test->method1();

print APP_PATH;
print_r($env);
print_r($envir);
