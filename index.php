<?php

require 'Pokemon.php';

$charmeleon = new Pokemon('Charmeleon', 'Fire ', 60, 'Water', 'Lightning');
$charmeleon -> addWeakness('Water', 2);
$charmeleon -> addResistance()

$pikachu = new Pokemon('Pikachu', 'Lightning', 60, 'Fire', 'Fighting');



include 'inc/htmlstart.html';
?>

<h1> <?php echo $charmeleon -> name ?> </h1>

<?php
include 'inc/htmlend.html';
?>


