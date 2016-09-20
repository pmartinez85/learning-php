<?php

class Person {

    public $name;
    public $midlename;
    public $lastname;

    /**
     * Person constructor.
     * @param $name
     * @param $midlename
     * @param $lastname
     */
    public function __construct($name, $midlename, $lastname)
    {
        $this->name = $name;
        $this->midlename = $midlename;
        $this->lastname = $lastname;
    }


}