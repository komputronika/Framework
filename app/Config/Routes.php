<?php

// Controller = App\Controller\Class@method
// Controller folder = app/Controller

$router->get("/", "App\Controllers\Home@index");
$router->get("/lsp", "App\Controllers\Home@index");
$router->get("/info", "App\Controllers\Home@info");
$router->get("/parser", "App\Controllers\Home@parse");
$router->post("/api", "App\Controllers\Api@index");
