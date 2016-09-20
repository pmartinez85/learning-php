<?php


require 'function.php';

require 'Task.php';

//PDO: Php Data Object library/biblioteca

$pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root','');

require 'index.template.php';







