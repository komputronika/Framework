<?php
//-----------------------------------
//--- Error reporting
//-----------------------------------
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//-----------------------------------
//--- Vendor autoload
//-----------------------------------
require_once ("./vendor/autoload.php");

//-----------------------------------
//--- Bootstraping
//-----------------------------------
require "./core/bootstrap.php";
require "./core/helpers.php";
require "./core/Classes/Router.php";

//-----------------------------------
//--- Define base URL
//-----------------------------------
// App path ended with NO trailing "/"
const BASE_URL  = "/MVC";

//-----------------------------------
//--- Define base path
//-----------------------------------
// App path ended with trailing "/"
const BASE_PATH =  __DIR__ . DIRECTORY_SEPARATOR;
//const APP_PATH  =  dirname(__FILE__) . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR;
//const APP_PATH  =  dirname(__FILE__) . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR;
define('APP_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR );

//-----------------------------------
//--- Autoload classes
//-----------------------------------
spl_autoload_register(function($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require basePath("{$class}.php");
});

//-----------------------------------
//--- Load environtment
//-----------------------------------
$env = parse_ini_file("./.env",false);
foreach($env as $key => $val){
    if (!is_array($val)) 
    {
        putenv("$key=$val");
    }
}
//$env = getenv('app_environtment');

//-----------------------------------
//--- Instantiate router class
//-----------------------------------
$router = Router::getRouter();

//-----------------------------------
//--- Load user's router definition
//-----------------------------------
require APP_PATH . "Config/Routes.php";

//-----------------------------------
//--- Run app
//-----------------------------------
// $app = Framework\Engine;
// $app->run( $router )

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// print "METHOD: $method<br>";
// print "URI: $uri<br>";

$router->route($method, $uri, BASE_URL);

//-----------------------------------
//--- Test
//-----------------------------------
/*use Framework\Testclass;
$test = new Testclass;
$test->method1();
$test = new App\Controllers\Home;
$test->index();
print APP_PATH;
print_r($env);
*/