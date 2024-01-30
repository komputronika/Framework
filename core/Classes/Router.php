<?php

class Router
{
    private static $router;

    //private function __construct(private array $routes = [])
    private function __construct()
    {
        $this->routes=[];
    }

    public static function getRouter(): self
    {

        if (!isset(self::$router)) {

            self::$router = new self();
        }

        return self::$router;
    }

    public function get(string $uri, string $action): void
    {

        $this->register($uri, $action, "GET");
    }

    public function post(string $uri, string $action): void
    {

        $this->register($uri, $action, "POST");
    }

    public function put(string $uri, string $action): void
    {

        $this->register($uri, $action, "PUT");
    }

    public function delete(string $uri, string $action): void
    {

        $this->register($uri, $action, "DELETE");
    }

    protected function register(string $uri, string $action, string $method): void
    {

        if (!isset($this->routes[$method])) $this->routes[$method] = [];

        list($controller, $function) = $this->extractAction($action);

        $this->routes[$method][$uri] = [
            'controller' => $controller,
            'method' => $function
        ];
    }

    protected function extractAction(string $action, string $seperator = '@'): array
    {

        $sepIdx = strpos($action, $seperator);

        $controller = substr($action, 0, $sepIdx);
        $function = substr($action, $sepIdx + 1, strlen($action));

        return [$controller, $function];
    }

    public function route(string $method, string $uri, string $base_url): bool
    {

        $uri = str_replace($base_url,'',$uri);

        $result = dataGet($this->routes, $method . "." . $uri);

        if (!$result) abort("Route not found", 404);

        $controller = $result['controller'];
        $function = $result['method'];

        //
        //$controller = "App".'\\'.$controller;
        //$controllerInstance = new $controller();
        //

        if (class_exists($controller)) {

            $controllerInstance = new $controller();

            if (method_exists($controllerInstance, $function)) {


                // Proccess return from the method as http response
                $controllerInstance->$function();

                // Return to response controller, then print
                return true;

            } else {

                abort("No method {$function} on class {$controller}", 500);
            }
        }

        return false;
    }
}
