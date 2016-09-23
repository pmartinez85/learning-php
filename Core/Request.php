<?php


class Request
{


    public static function uri() {
        return trim($_SERVER['REQUEST_URI'],'/');
//       return urldecode(
//           parse_url($_SERVER['REQUEST_uri'], PHP_URL_PATH)
//     );
    }
}

