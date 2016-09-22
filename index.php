<?php

require "Core/bootstrap.php";

$tasks = $query->all('todos');

require 'index.template.php';








