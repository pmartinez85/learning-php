<?php

class Task{

    protected $description;

    private $completed;

    public function  __construct($description, $completed) {
        $this->description = $description;
        $this->completed = $completed;

    }


    public function getCompleted() {

         return $this->completed;
    }

    public function description($description) {

        $this->description = $description;

    }


    public function Completed($completed=null)
    {
        if ($completed == null){
            return $completed;
        }
        $this->completed = $completed;
    }


}