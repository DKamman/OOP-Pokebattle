<?php

require 'init.php';

$pikachu = new Pikachu('Makinto');
$charmeleon = new Charmeleon('Pabu');

$pikachuAttacks = $pikachu->getAttacks();
$charmeleonAttacks = $charmeleon->getAttacks();

include 'inc/htmlstart.html';
$pokemonBag = Pokemon::getPopulation();
?> 

<div class="pokebag">
    <h4>Pokebag</h4>
    <h6>Alive pokemon - <?= Pokemon::getPopulationCount(); ?></h6>
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

        <? foreach ($pokemonBag as $row) {
            $attacks = $row->getAttacks(); ?>
        <tr class="table-row">
            <td class="table-cell"><? echo $row->getPokemonType(); ?></td>
            <td class="table-cell"><? echo $row->getName() . " "; ?></td>
            <td class="table-cell"><? echo $row->getEnergyType() . " "; ?></td>
            <td class="table-cell"><? echo $row->getHitpoints() . " "; ?></td>
            <td class="table-cell"><? echo $row->getHealth() . " "; ?></td>
            <td class="table-cell">
                <?php foreach ($attacks as $row2) {
                ?> <p> <? echo $row2->name . " (" . $row2->damage . ")"; ?> </p>
                <? } ?>
            </td>
            <td class="table-cell"><? echo $row->getWeakness() . " "; ?></td>
            <td class="table-cell"><? echo $row->getResistance() . " "; ?></td>
            <td class="table-cell"><? echo $row->getColor(); ?></td>
        </tr>
        <? } ?>
    </table>
</div>

<?php

?><p>Average pokemon population health: <? echo Pokemon::getPopulationHealth();?> </p><?

$pikachu->attackPokemon($pikachuAttacks["Electric Ring"], $charmeleon);
$charmeleon->attackPokemon($charmeleonAttacks["Flare"], $pikachu);
$pikachu->attackPokemon($pikachuAttacks["Electric Ring"], $charmeleon);

?> <br>
<div class="pokebag">
    <h4>Pokebag</h4>
    <h6>Alive pokemon - <?= Pokemon::getPopulationCount(); ?></h6>
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

        <? foreach ($pokemonBag as $row) {
            $attacks = $row->getAttacks(); ?>
        <tr class="table-row">
            <td class="table-cell"><? echo $row->getPokemonType(); ?></td>
            <td class="table-cell"><? echo $row->getName() . " "; ?></td>
            <td class="table-cell"><? echo $row->getEnergyType() . " "; ?></td>
            <td class="table-cell"><? echo $row->getHitpoints() . " "; ?></td>
            <td class="table-cell"><? echo $row->getHealth() . " "; ?></td>
            <td class="table-cell">
                <?php foreach ($attacks as $row2) {
                ?> <p> <? echo $row2->name . " (" . $row2->damage . ")"; ?> </p>
                <? } ?>
            </td>
            <td class="table-cell"><? echo $row->getWeakness() . " "; ?></td>
            <td class="table-cell"><? echo $row->getResistance() . " "; ?></td>
            <td class="table-cell"><? echo $row->getColor(); ?></td>
        </tr>
        <? } ?>
    </table>
</div>

<p>Average pokemon population health: <? echo Pokemon::getPopulationHealth();?> </p>
<?
include 'inc/htmlend.html';
