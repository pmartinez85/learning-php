<?php


//$greeting = "Hola" . $_GET['nom'] . "!";
//require 'index.php';


//$nom = array();

$noms = [
    'Sergi',
    'Xavi',
    'Pedro'
];

$array = ['Sergi', 'Xavi', 'Pedro'];   //Intentarem no fer aquest format si es un array llarg

echo "<ul>";
foreach ($noms as $x){

    echo "<li>$x</li</li>";

}
echo "</ul>";