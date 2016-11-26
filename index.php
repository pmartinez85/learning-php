<?php

require 'core/bootstrap.php';
//require 'Core/Request.php';
//require 'Core/Router.php';



require __DIR__ . "/vendor/autoload.php";

require Router::load('routes.php')->direct(Request::uri());
//var_dump(Request::uri());


use Pmartinez85\Request as Request;

//echo Request::uri();

use Pmartinez85\Router as Router;

//echo Router::load();

