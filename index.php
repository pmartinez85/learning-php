<?php


require 'function.php';

require 'Task.php';

require 'database/Connection.php';
require 'database/QueryBuilder.php';

$pdo = Connection::make();

$query = new QueryBuilder();
$tasks = $query->all($pdo, 'todos');


require 'index.template.php';








