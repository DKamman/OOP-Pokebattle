<?php

class Pokemon {

    private static $populationCount = 0;
    private static $population = [];
    private static $pokemonHealth;
    
    private $pokemonType;
    private $name;
    private $energyType;
    private $hitpoints;
    private $health;
    private $attacks;
    private $weakness;
    private $resistance;
    private $color;

    public function __construct($pokemonType, $name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance, $color)
    {
        self::$populationCount++;

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

        self::$population[] = $this;
    }

    public function attackPokemon($attack, $target){
        echo "<br><hr>Attacking<br>Pokémon: " . $this->name . " " . $this->pokemonType . " " . $this->energyType . ", Attack damage: " . $attack->damage . "<br><br>";
        echo "Defending<br>Pokémon: " . $target->name . " " . $target->pokemonType . " " . $target->energyType . ", Health: " . $target->health . ", Resistance: " . $target->resistance->energyType . ", Weakness: " . $target->weakness->energyType . "<br><br>";

        // // Weakness calculation
        if ($this->energyType == $target->weakness->energyType) {
            $actualDamage = $attack->damage * $target->weakness->multiplier;
            echo "The attack did " . $actualDamage . " damage to " . $target->name . ".<br>";

            // debugg if calculations work
            // $actualHealth = $target->health - $actualDamage;
            // echo $target->name . "'s health: " . $actualHealth . "<hr><br><br>";

            // set's $actualHealth to traget's health
            $actualHealth = $target->health - $actualDamage;
            if ($actualHealth < 0) {
                $actualHealth = 0;
            }
            $target->health = $actualHealth;
            echo $target->name . "'s health: " . $target->health . "<hr><br><br>";
        }

        // // Resistance calculation
        if ($this->energyType == $target->resistance->energyType) {
            $actualDamage = $attack->damage - $target->resistance->value;
            echo "The attack did " . $actualDamage . " damage to " . $target->name . ".<br>";

            //debugg if calculations work
            // $actualHealth = $target->health - $actualDamage;
            // echo $target->name . "'s health: " . $actualHealth . "<hr><br><br>";

            // set's $actualHealth to traget's health
            $actualHealth = $target->health - $actualDamage;
            if ($actualHealth < 0) {
                $actualHealth = 0;
            }
            $target->health = $actualHealth;
            echo $target->name . "'s health: " . $target->health . "<hr><br><br>";
        }

        if ($target->health <= 0) {
            self::$populationCount--;
        }
    }

    public static function getPopulationHealth() {
        foreach (self::$population as $pokemon) {
            $ph = $pokemon->health;
            if ($ph > 0) {
                self::$pokemonHealth = self::$pokemonHealth + $ph;
            }
        }
        self::$pokemonHealth = self::$pokemonHealth / self::$populationCount;
        return self::$pokemonHealth;
    }

    public static function getPopulation() {
        return self::$population;
    }

    public static function getPopulationCount() {
        return self::$populationCount;
    }

    public function getPokemonType() {
        return $this->pokemonType;
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

    public function getColor() {
        return $this->color;
    }
}