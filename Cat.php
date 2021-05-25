<?php


class Cat extends Animal
{
    public $hours_of_sleep;
    public $fur_length;

    public function __construct($food, $location, $hours_of_sleep, $fur_length)
    {
        $this->food = $food;
        $this->location = $location;
        $this->hours_of_sleep = $hours_of_sleep;
        $this->fur_length = $fur_length;
    }

    public function makeNoise()
    {
        echo "Mrr?";
    }

    public function eat()
    {
        echo "Some cat with {$this->fur_length} fur length eats";
    }
}