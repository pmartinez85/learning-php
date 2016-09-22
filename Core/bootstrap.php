<?php

require 'Core/function.php';

require 'Models/Task.php';

require 'Core/database/QueryBuilder.php';

require 'Core/database/Connection.php';

require 'persons.php';

require 'persons.template.php';

$config = require 'config/database.php';
$message = require 'config/database.php';

$pdo = Connection::make($config);

$query = new QueryBuilder($pdo);