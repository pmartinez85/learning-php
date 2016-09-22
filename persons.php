<?php

require "bottstrap.php";

$tasks = $query->all('Persons');


require 'persons.template.php';