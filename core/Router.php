<?php

namespace pmartinez85\Myframework\core;

use Exception;

class Router
{
    protected $routes = [];

    public function define($routes)
    {
        $this->routes = $routes;

    }

    public static function load($routes)
    {
        $router = new static;
        $router->routes = require $routes;
        return $router;
    }


    public function direct($uri){

        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        } else {
            throw new Exception("No s'ha trobat la URL");
        }
    }

}
