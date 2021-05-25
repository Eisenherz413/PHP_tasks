<?php


class Vet
{
    public $animal_name;

    public function __construct($animal_name)
    {
        $this->animal_name = $animal_name;
    }

    public function treatAnimal ($animal_name){
        echo "Healing {$animal_name}";

    }

}