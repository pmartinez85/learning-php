<?php

class Task{

    public $description;

    public $completed;

    public function  __construct($description, $completed) {
        $this->description = $description;
        $this->completed = $completed;

    }

    public function complete(){
    $this->completed = true;

    }
    public function getCompleted() {

         return $this->completed;
    }

    public function description($description) {

        $this->description = $description;

    }


}