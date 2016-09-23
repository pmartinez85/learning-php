<?php


class Request{

    public static function uri(){


//$uri = trim($_SERVER['REQUEST_URI'],'/');
//if (array_key_exists($uri,$routes) ) {
//require $routes[$uri];
//} else {
//    throw new Exception("No s'ha trobat la pagina");
//}

        return urldecode(
            parse_url($_SERVER['REQUEST_uri'], PHP_URL_PATH)
        );
        }



}