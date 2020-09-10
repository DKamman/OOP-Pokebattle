<?php

require 'init.php';

$pikachu = new Pikachu('Makinto');

echo $pikachu->getName() . " ";
echo $pikachu->getEnergyType() . " "; 
echo $pikachu->getHitpoints() . " ";