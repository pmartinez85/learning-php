<?php

require "Core/bootstrap.php";
require 'Core/Request.php';
require 'Core/Router.php';


//HTTP -> REQUEST -> Response

//$request = new Request;
//$uri = $request->uri();

$routes = require 'routes.php';

//$uri = Request::uri();
//$router = new Router;
//$router ->define($router);
//require $routes->direct($uri);

require Router::load('routes.php')->direct(Request::uri());
