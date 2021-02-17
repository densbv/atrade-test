<?php

class Priv {

    private $firstName;
    private $lastName;

    public function display() 
    {
        print $this->firstName . ' ' . $this->lastName . PHP_EOL;
    }

}

$obj = new Priv;

$closure = function() {
    $this->firstName = "Micky";
    $this->lastName = "Thompson";
};

$closure->call($obj);

$obj->display();


