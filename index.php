<?php


require'function.php';

//require 'index.template.php';



class Task{

    public $description;
    public $completed;

    public function  __construct($description, $completed) {
       $this->description = $description;
        $this->completed = $completed;


    }


}

$task = new Task("Aprendre PHP",false);
$task = new Task("Netejar ", true);
$task = new Task("Sortir", false);

var_dump($task);

