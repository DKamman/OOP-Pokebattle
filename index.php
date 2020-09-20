<?php

require 'init.php';

$pikachu = new Pikachu('Makinto');
$charmeleon = new Charmeleon('Pabu');

$pikachuAttacks = $pikachu->getAttacks();
$charmeleonAttacks = $charmeleon->getAttacks();

include 'inc/htmlstart.html';
?> 

<table>
    <tr class="table-row">
        <th class="table-head">Pokemon</th>
        <th class="table-head">Name</th>
        <th class="table-head">Energy Type</th>
        <th class="table-head">Max Hitpoints</th>
        <th class="table-head">Health</th>
        <th class="table-head">Attacks (Damage)</th>
        <th class="table-head">Weakness (Multiplier)</th>
        <th class="table-head">Resistance (Value)</th>
        <th class="table-head">Color</th>
    </tr>
    <tr class="table-row">
        <td class="table-cell"><? echo $pikachu->pokemonType; ?></td>
        <td class="table-cell"><? echo $pikachu->getName() . " "; ?></td>
        <td class="table-cell"><? echo $pikachu->getEnergyType() . " "; ?></td>
        <td class="table-cell"><? echo $pikachu->getHitpoints() . " "; ?></td>
        <td class="table-cell"><? echo $pikachu->getHealth() . " "; ?></td>
        <td class="table-cell">
            <?php foreach ($pikachuAttacks as $row) {
               ?> <p> <? echo $row->name . " (" . $row->damage . ")"; ?> </p>
            <? } ?>
        </td>
        <td class="table-cell"><? echo $pikachu->getWeakness() . " "; ?></td>
        <td class="table-cell"><? echo $pikachu->getResistance() . " "; ?></td>
        <td class="table-cell"><? echo $pikachu->color ?></td>
    </tr>
    <tr class="table-row">
        <td class="table-cell"><? echo $charmeleon->pokemonType; ?></td>
        <td class="table-cell"><? echo $charmeleon->getName() . " "; ?></td>
        <td class="table-cell"><? echo $charmeleon->getEnergyType() . " "; ?></td>
        <td class="table-cell"><? echo $charmeleon->getHitpoints() . " "; ?></td>
        <td class="table-cell"><? echo $charmeleon->getHealth() . " "; ?></td>
        <td class="table-cell">
            <?php foreach ($charmeleonAttacks as $row) {
               ?> <p> <? echo $row->name . " (" . $row->damage . ")"; ?> </p>
            <? } ?>
        </td>
        <td class="table-cell"><? echo $charmeleon->getWeakness() . " "; ?></td>
        <td class="table-cell"><? echo $charmeleon->getResistance() . " "; ?></td>
        <td class="table-cell"><? echo $charmeleon->color ?></td>
    </tr>
</table>

<?php

// $headbuttAttack = $attacks["HEADBUTT"]; 
// $attacks = array("HEADBUTT" => "Head Butt", 50);
// Associative array to use for the attackPokemon function. To be able to specify by name what attack to use.

$pikachu->attackPokemon($pikachuAttacks["Electric Ring"], $charmeleon);
$charmeleon->attackPokemon($charmeleonAttacks["Flare"], $pikachu);

include 'inc/htmlend.html';
