<?php

namespace Pmartinez85;

class Request
{


    public static function uri() {
        return trim($_SERVER['REQUEST_URI'],'/');
    }
}

