<?php

class Pikachu extends Pokemon {
    
    // parent::__construct($name, 'Lightning', 60);
    public function __construct($name)
    {
        $this->name = $name;
        $this->energyType = 'Lightning';
        $this->hitpoints = 60;
        $this->health = 60; // $hitpoints;
        $this->attacks = [new Attack("Electric Ring", 50), new Attack("Pika Punch", 20)];
        $this->weakness = new Weakness("Fire", 1.5);
        $this->resistance = new Resistance("Fighting", 20);

    }
}