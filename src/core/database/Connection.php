<?php

namespace pmartinez85\Myframework\core\database;

use PDO;
use PDOException;

class Connection {


    public static function make($config,$message){
        try {
            $pdo = new PDO(
                $config['dbtype'] .  ':host=' .
                $config['dbhost'] .  ';dbname=' .
                $config['dbname'],
                $config['username'],
                $config['password']
            );
            return $pdo;
        } catch (PDOexception $e) {
            die($message['DatabaseErrorConnection'] . $e->getMessage());
        }
    }
}