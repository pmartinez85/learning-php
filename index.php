<?php

$noms = [
    'Pedro ',
    'Xavi ',
    'Sergi '
];

// ARRAYS ASSOCIATIUS

$person = [
    'name' => 'Pedro',
    'sn1' => 'Martínez',
    'sn2' => 'Segura',
    'edat' => '30',
    'married' => true
];

//
//die('Xivato');
//echo "NO S'EXECUTA MAI";
//dd();
//
//
//
//var_dump($person);

echo $noms[0];

echo $person['sn1'];

$married = true;
$married = false;



require 'index.template.php';