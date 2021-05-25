<?php


class Animal
{
    public $food;
    public $location;

    public function __construct($food, $location) {
        $this->food = $food;
        $this->location = $location;
    }

    public function makeNoise(){}
    public function eat(){}
    public function sleep(){
        echo "Now". get_class($this) ."is sleeping";
    }

}