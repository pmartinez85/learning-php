<?php

require "core/bootstrap.php";

$tasks = $query->all('todos');

require 'index.template.php';








