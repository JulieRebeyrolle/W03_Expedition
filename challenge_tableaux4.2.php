<?php

$indianaJonesMovies = [
    'Les aventuriers de l\'arche perdue' => ['Harrison Ford', 'Karen Allen', 'Paul Freeman'],
    'Indiana Jones et le temple maudit' => ['Harrison Ford', 'Kate Capshaw', 'Ke Huy Quan'],
    'Indiana Jones et la dernière croisade' => ['Harrison Ford', 'Sean Connery', 'Alison Doody']
];

foreach ($indianaJonesMovies as $title => $actors){
    echo 'Dans le film ' . $title . ' les principaux acteurs sont :';

    foreach ($actors as $actor){
        echo ' ' . $actor;
    }
    echo '.' . "\n";
}