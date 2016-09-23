<?php

require "Core/bootstrap.php";

require 'routes.php';

require 'Core/Request.php';


//HTTP -> REQUEST -> Response

//$request = new Request;
//$uri = $request->uri();

$uri = Request::uri();

if (array_key_exists($uri,$routes) ) {
require $routes[$uri];
} else {
    throw new Exception("No s'ha trobat la pagina");
}








