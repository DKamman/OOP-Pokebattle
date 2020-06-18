<?php

class Charmeleon extends Pokemon {

    // parent::__construct($name, 'Fire', 60);
    public function __construct($name)
    {
        $this->name = $name;
        $this->energyType = 'Fire';
        $this->hitpoints = 60;
    }
}