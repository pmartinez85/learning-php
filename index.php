<?php


require 'function.php';

require 'Task.php';

require 'database/Connection.php';
require 'database/QueryBuilder.php';

$pdo = Connection::make();

$query = new QueryBuilder($pdo);
$tasks = $query->all('todos');


require 'index.template.php';








