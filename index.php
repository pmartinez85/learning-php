<?php


require 'function.php';

require 'Task.php';

//PDO: Php Data Object library/biblioteca

try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root','');


}

catch (PDOexception $e){
    die("Hi ha hagut un error durant la connexió" . $e->getMessage());
}


$query = $pdo->prepare('select * from todos');

$query->execute();

//var_dump ($query->fetchAll(PDO::FETCH_OBJ));

$tasks = $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,Task::class);

require 'index.template.php';







