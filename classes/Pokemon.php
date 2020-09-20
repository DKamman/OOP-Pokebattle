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

    public function attackPokemon($attack, $target){
        echo "<br><hr>Attacking<br>Pokémon: " . $this->name . " " . $this->pokemonType . " " . $this->energyType . ", Attack damage: " . $attack->damage . "<br><br>";
        echo "Defending<br>Pokémon: " . $target->name . " " . $target->pokemonType . " " . $target->energyType . ", Health: " . $target->health . ", Resistance: " . $target->resistance->energyType . ", Weakness: " . $target->weakness->energyType . "<br><br>";

        // // Weakness calculation
        // if energytype of attacker == energytype of the target's weakness, attacker damage * weakness multiplier
        if ($this->energyType == $target->weakness->energyType) {
            $actualDamage = $attack->damage * $target->weakness->multiplier;
            echo "The attack did " . $actualDamage . " damage to " . $target->name . ".<br>";
            $actualHealth = $target->health - $actualDamage;
            echo "Actual health: " . $actualHealth . "<hr><br><br>";
        }

        // // Resistance calculation
        // if energytype of attacker == energytype of the target's resistance, attacker damage minus resistance value
        if ($this->energyType == $target->resistance->energyType) {
            $actualDamage = $attack->damage - $target->resistance->value;
            echo "The attack did " . $actualDamage . " damage to " . $target->name . ".<br>";
            $actualHealth = $target->health - $actualDamage;
            echo "Actual health: " . $actualHealth . "<hr><br><br>";
        } 
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