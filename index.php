<?php

require "bootstrap.php";
$tasks = $query->all('todos');

require 'index.template.php';








