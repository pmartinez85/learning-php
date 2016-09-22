<?php

require 'function.php';

require 'Models/Task.php';

require 'database/QueryBuilder.php';

require 'database/Connection.php';

$config = require 'config/database.php';
$message = require 'config/database.php';

$pdo = Connection::make($config);

$query = new QueryBuilder($pdo);