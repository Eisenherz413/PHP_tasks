<?php


class Dog extends Animal
{
    public $tail_shape;
    public $barking_loudliest;

    public function __construct($food, $location, $tail_shape, $barking_loudliest) {
        $this->food = $food;
        $this->location = $location;
        $this->barking_loudliest = $barking_loudliest;
        $this->tail_shape = $tail_shape;
    }

    public function makeNoise(){
        echo "Bark-bark";
    }
    public function eat(){
        echo "Some dog with {$this->tail_shape} tail shape eats";
    }
}