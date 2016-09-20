<?php


require 'function.php';

require 'Task.php';

//PDO: Php Data Object library/biblioteca

$pdo = connect();


$tasks = allTasks($pdo);

require 'index.template.php';







