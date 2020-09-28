<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO

switch ($opponentWeapon) {
    case 'fists':
        $indyWeapon = $weapons[2];
        break;
    case 'whip':
        $indyWeapon = $weapons[0];
        break;
    case 'gun':
        $indyWeapon = $weapons[1];
        break;
    default:
        echo 'The opponent is a cheater';
}

echo 'The opponent had ' . $opponentWeapon . ' and Indy used ' . $indyWeapon . ' to win' . PHP_EOL;


