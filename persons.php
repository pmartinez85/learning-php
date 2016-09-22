<?php

require "Core/bootstrap.php";

$persons = $query->all('Persons');


require 'persons.template.php';