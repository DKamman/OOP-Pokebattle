<?php

class Pikachu extends Pokemon {
    
    public function __construct($name)
    {
        $pokemonType = 'Pikachu';
        $name;
        $energyType = 'Lightning';
        $hitpoints = 60;
        $health;
        $attacks = ["Electric Ring" => new Attack("Electric Ring", 50), "Pika Punch" => new Attack("Pika Punch", 20)];
        $weakness = new Weakness("Fire", 1.5);
        $resistance = new Resistance("Fighting", 20);

        parent::__construct($pokemonType, $name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance, $color);
    }
}