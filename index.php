<?php

require 'init.php';

$pikachu = new Pikachu('token');

echo $pikachu->getName();
echo $pikachu->getEnergyType();
echo $pikachu->getHitpoints();

$charmeleon = new Charmeleon('Token');

echo $charmeleon->getName();
echo $charmeleon->getEnergyType();
echo $charmeleon->getHitpoints();