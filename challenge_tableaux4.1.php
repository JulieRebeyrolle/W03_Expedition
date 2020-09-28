<?php
$indianaJonesMovies= [
    'Les aventuriers de l\'arche perdue' => 1981,
    'Indiana Jones et la Dernière croisade' => 1989,
    'Indiana Jones et le Temple maudit' => 1984
];

asort($indianaJonesMovies);

foreach ($indianaJonesMovies as $movie => $year){
    echo $year;
    echo ' - ';
    echo $movie, "\n";
}