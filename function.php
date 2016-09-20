<?php

function hello($name, $sn1) {
    echo "Hello " . $name . " " . $sn1 . "!";

}


function printArgs($args) {
    foreach ($args as $arg){
        echo $arg . '.';
    }

}


function sum() {

    return array_sum(func_get_arg());

}

function connect()
{
    try {

        $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root', '');
        return $pdo;
    } catch (PDOexception $e) {
        die("Hi ha hagut un error durant la connexió" . $e->getMessage());
    }

}

function allTasks($pdo)
{
    $query = $pdo->prepare('select * from todos');

    $query->execute();


    return   $tasks = $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);

}