<?php


// $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root', '');


class Connection {


    public static function make($config){
        try {
            $pdo = new PDO("".
                $config['dbtype'].  ':host=' .
                $config['dbhost'].  ';dbname='.
                $config['dbname'],
                $config['username'],
                $config['password']);
            return $pdo;
        } catch (PDOexception $e) {
            die($message['Databaseerrorconnection'] . $e->getMessage());
        }
    }

}