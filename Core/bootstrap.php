<?php

require 'function.php';

require 'Models/Task.php';

require 'database/QueryBuilder.php';

require 'database/Connection.php';

$config = require 'config/database.php';
$message = require 'config/message.php';

$pdo = Connection::make($config,$message);

$query = new QueryBuilder($pdo);