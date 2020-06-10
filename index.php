<?php

require 'Pokemon.php';
require 'Charmeleon.php';
require 'Pikachu.php';

$charmeleon = new Charmeleon('Charmeleon', 'Fire ', 60);
$pikachu = new Pikachu('Pikachu', 'Lightning', 60);

echo $charmeleon->getName();
echo $pikachu->getName();
