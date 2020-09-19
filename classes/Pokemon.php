<?php

class Pokemon {
    
    public $pokemonType;
    public $name;
    public $energyType;
    public $hitpoints;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;
    public $color;

    public function __construct($pokemonType, $name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance, $color)
    {
        $this->pokemonType = $pokemonType;
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        if ($energyType == 'Fire') {
            $this->color = "Red";
        }
        if ($energyType == 'Lightning') {
            $this->color = "Yellow";
        }
    }

    
    // $headbuttAttack = $attacks["HEADBUTT"]; 
    // $attacks = array("HEADBUTT" => "Head Butt", 50);
    // Associative array to use for the attackPokemon function. To be able to specify by name what attack to use.

    public function attackPokemon($attacker, $target, $attack){
        echo "Attacking " . $attacker->energyType . $attack->damage;
        echo "Defending " . $target->energyType . $target->resistance->energyType ; 
        // // Weakness calculation
        // if ()

        // // Resistance calculation
        // if 
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
}