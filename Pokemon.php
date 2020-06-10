<?php

class Pokemon {
    public $name;
    public $energyType;
    public $hitpoints;

    public function __construct($name, $energyType, $hitpoints)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
    }

    public function getName() {
        return $this->name;
    }

    // public function addWeakness($energyType, $multiplier){
    //     $this->weakness = new Weakness($energyType, $multiplier);
    //    }

    // public function addResistance($energyType, $value){
    //     $this->resistance = new Resistance($energyType, $value);
    // }
}