<?php

function hello($name, $sn1) {
    echo "Hello " . $name . " " . $sn1 . "!";

}


function printArgs($args) {
    foreach ($args as $arg){
        echo $arg . '.';
    }

}


function sum() {

    $numbers = func_get_arg();

    return array_sum($numbers);

}

