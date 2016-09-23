<?php

require "Core/bootstrap.php";
require 'Core/Request.php';
require 'Core/Router.php';


require Router::load('routes.php')->direct(Request::uri());
