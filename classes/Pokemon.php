<?php

class Pokemon {
    public $name;
    public $energyType;
    public $hitpoints;
    public $health;
    public $attack;
    public $weakness;
    public $resistance;

    public function __construct($name, $energyType, $hitpoints)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $health;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

    }

    public function getName() {
        return $this->name;
    }

    public function getEnergyType() {
        return $this->energyType;
    }

    public function getHitpoints() {
        return $this->hitpoints;
    }

    public function getHealth() {
        return $this->health;
    }

    public function getAttacks() {
        return $this->attacks;
    }

    public function getWeakness() {
        return $this->weakness->energyType . " (" . $this->weakness->multiplier . ")";
    }

    public function getResistance() {
        return $this->resistance->energyType . " (" . $this->resistance->value . ")";
    }

    // public function addWeakness($energyType, $multiplier){
    //     $this->weakness = new Weakness($energyType, $multiplier);
    //    }

    // public function addResistance($energyType, $value){
    //     $this->resistance = new Resistance($energyType, $value);
    // }
}