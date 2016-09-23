<?php

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
        $router->routes = $routes;
        return $router;
    }


    public function direct($uri){

        if (array_key_exists($uri,$this->routes) ) {
            return $this->routes[$uri];
        } else {
            throw new Exception("No s'ha trobat la pagina");
        }
    }

}