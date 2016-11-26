<?php

require __DIR__."/../src/core/bootstrap.php";
use pmartinez85\Myframework\core\Request;
use pmartinez85\Myframework\core\Router;
require Router::load('routes.php')->direct(Request::uri());

