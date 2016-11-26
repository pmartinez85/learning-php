<?php

require 'function.php';

//require 'Models/Task.php';
//
//require 'database/QueryBuilder.php';
//
//require 'database/Connection.php';

$config = require 'config/database.php';
$message = require 'config/message.php';

$pdo = Pmartinez85\Connection::make($config,$message);

$query = new Pmartinez85\QueryBuilder($pdo);