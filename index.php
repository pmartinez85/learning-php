<?php


require 'function.php';

//require 'index.template.php';

require 'Task.php';


//POJO


$task = new Task("Aprendre PHP",false);
var_dump($task ->description);
var_dump($task -> completed);

var_dump($task);

