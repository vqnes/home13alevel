<?php

require_once 'Animal.php';

abstract class Mammal extends Animal
{
    public function __construct()
    {
        $this->group = AnimalGroup::MAMMAL();
    }
}
