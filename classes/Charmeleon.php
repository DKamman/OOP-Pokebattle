<?php

class Charmeleon extends Pokemon {

    // parent::__construct($name, 'Fire', 60);
    public function __construct($name)
    {
        $this->name = $name;
        $this->energyType = 'Fire';
        $this->hitpoints = 60;
        $this->health = 60; // $hitpoints;
        $this->attacks = [new Attack("Head Butt" , 10), new Attack("Flare", 30)];
        $this->weakness = new Weakness("Water", 2);
        $this->resistance = new Resistance("Lightning", 10);
    }
}