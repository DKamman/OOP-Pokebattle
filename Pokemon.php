<?php
require 'Weakness.php';
require 'Resistance.php';

class Pokemon {
    public $name;
    public $energyType;
    public $hitpoints;
    public $weakness;
    public $resistance;

    public function __construct($name, $energyType, $hitpoints, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    public function addWeakness($energyType, $multiplier){
        $this->weakness = new Weakness($energyType, $multiplier);
       }

    public function addResistance($energyType, $value){
        $this->resistance = new Resistance($energyType, $value);
    }
}