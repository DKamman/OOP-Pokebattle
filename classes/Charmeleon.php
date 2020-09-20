<?php

class Charmeleon extends Pokemon {

    public function __construct($name)
    {
        $pokemonType = 'Charmeleon';
        $name;
        $energyType = 'Fire';
        $hitpoints = 60;
        $health;
        $attacks = ["Head Butt" => new Attack("Head Butt" , 10), "Flare" => new Attack("Flare", 30)];
        $weakness = new Weakness("Water", 2);
        $resistance = new Resistance("Lightning", 10);

        parent::__construct($pokemonType, $name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance, $color);
    }
}