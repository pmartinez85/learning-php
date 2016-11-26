<?php

namespace pmartinez85\Myframework\core;

class Request
{
    public static function uri() {
        return trim($_SERVER['REQUEST_URI'],'/');
    }
}

