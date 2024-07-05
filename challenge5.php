<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)];
$stevensonWeapon = '';

if ($opponentWeapon == 'fists') {
    $stevensonWeapon = 'gun';
} elseif ($opponentWeapon == 'gun') {
    $stevensonWeapon = 'whip';
} elseif ($opponentWeapon == 'whip') {
    $stevensonWeapon = 'fists';
}


echo "\nThe opponent's weapon is: " . $opponentWeapon . "\n";
echo "Stevenson's weapon is: " . $stevensonWeapon . "\n";


?>