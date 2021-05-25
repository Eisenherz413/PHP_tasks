<?php


class Horse extends Animal
{
    public $tooth_quality;
    public $tail_length;

    public function __construct($food, $location, $tooth_quality, $tail_length) {
        $this->food = $food;
        $this->location = $location;
        $this->tooth_quality = $tooth_quality;
        $this->tail_length = $tail_length;
    }

    public function makeNoise(){
        "Ihoho!!";
    }
    public function eat(){
        "Some horse with {$this->tooth_quality} tooth quality eats";
    }
}