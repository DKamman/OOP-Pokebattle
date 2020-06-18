<?php

class Pikachu extends Pokemon {
    
    // parent::__construct($name, 'Lightning', 60);
    public function __construct($name)
    {
        $this->name = $name;
        $this->energyType = 'Lightning';
        $this->hitpoints = 60;
    }
}