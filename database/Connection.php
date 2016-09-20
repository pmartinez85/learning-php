<?php

/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 20/09/16
 * Time: 21:24
 */
class Connection {


    public static function make(){
        try {

            $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root', '');
            return $pdo;
        } catch (PDOexception $e) {
            die("Hi ha hagut un error durant la connexió" . $e->getMessage());
        }
    }

}