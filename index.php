<?php

require_once ("./vendor/autoload.php");

//-----------------------------------

//--- Define path

//--- Load environtment

//--- Bootstraping
require "./core/bootstrap.php";

//--- Instantiate router class
// require "./core/Classes/Router.php";
// $router = new Router();

//--- Load router definition
// require "./app/Config/Router.php";

//--- Run app
// $app = Framework\Engine;
// $app->run( $router )




//--- Test
use Framework\Testclass;

$test = new Testclass;
$test->method1();




