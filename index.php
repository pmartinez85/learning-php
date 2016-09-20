<?php


require 'function.php';

require 'Task.php';

$pdo = Connection::make();

$tasks = allTasks($pdo);

require 'index.template.php';








