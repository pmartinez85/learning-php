<?php

require 'function.php';

require 'Task.php';

require 'database/QueryBuilder.php';

require 'database/Connection.php';

require 'persons.php';

require 'persons.template.php';

$config = require 'config/database.php';
$message = require 'config/database.php';

$pdo = Connection::make($config);

$query = new QueryBuilder($pdo);