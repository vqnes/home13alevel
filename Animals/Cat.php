<?php

require_once 'Mammal.php';

class Cat extends Mammal
{
    public function __construct()
    {
        parent::__construct();
        $this->order = AnimalOrder::CARNIVORES();
        $this->family = AnimalFamily::FELIDAE();
        $this->species = AnimalSpecies::FELIS_CATUS();
    }
}
