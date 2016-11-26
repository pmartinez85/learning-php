<?php

require "../vendor/autoload.php";
use pmartinez85\Myframework\core\database\QueryBuilder;
use pmartinez85\Myframework\core\database\Connection;

$config = require 'config/database.php';
$message = require 'config/message.php';
$pdo = Connection::make($config,$message);
$query = new QueryBuilder\QueryBuilder($pdo);