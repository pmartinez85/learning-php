<?php

namespace pmartinez85\Myframework\core;
use pmartinez85\Myframework\core\models\Task;
use PDO, PDOException;

function hello($name, $sn1) {
    echo "Hello " . $name . " " . $sn1 . "!";

}


function printArgs($args) {
    foreach ($args as $arg){
        echo $arg . '.';
    }

}

function hellovtortosina($name, $sn1 = "Curto"){
    echo "Hola " . $name . " " . $sn1 . " !";
}


function sum() {

    return array_sum(func_get_args());

}

function connectDb()
{
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root', '');
        return $pdo;
    } catch (PDOException $e) {
        die("Ha hagut un error durant la connexió. Missatge: " . $e->getMessage());
    }
}

function allTasks(PDO $pdo)
{
    $query = $pdo->prepare('SELECT * FROM todos');
    $query->execute();
    return $query->fetchAll(
        PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
        Task::class);
}