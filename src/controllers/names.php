<?php
$table='Persons';
$camp = 'FirstName';
$name = $_POST['name'];
$statement = $query->addCamp($table,$camp,$name);
echo "Jelou " . $name ;