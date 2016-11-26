<?php

namespace pmartinez85\Myframework\core\models;

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

    public function isComplete(){
        return $this->completed;
    }


}