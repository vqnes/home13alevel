<?php

require_once 'Enums/AnimalGroup.php';
require_once 'Enums/AnimalOrder.php';
require_once 'Enums/AnimalFamily.php';
require_once 'Enums/AnimalSpecies.php';

abstract class Animal
{
    protected AnimalGroup $group;
    protected AnimalOrder $order;
    protected AnimalFamily $family;
    protected AnimalSpecies $species;
    protected ?string $name = null;
    protected ?int $age = null;

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;
        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function getGroup(): AnimalGroup
    {
        return $this->group;
    }

    public function getOrder(): AnimalOrder
    {
        return $this->order;
    }

    public function getFamily(): AnimalFamily
    {
        return $this->family;
    }

    public function getSpecies(): AnimalSpecies
    {
        return $this->species;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'Name'    => $this->getName(),
            'Age'     => $this->getAge(),
            'Group'   => $this->getGroup()->getValue(),
            'Order'   => $this->getOrder()->getValue(),
            'Family'  => $this->getFamily()->getValue(),
            'Species' => $this->getSpecies()->getValue(),
        ];
    }
}
