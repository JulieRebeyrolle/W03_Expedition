<?php
$movies = [
    "Les Aventuriers de l'arche perdue",
    "Indiana Jones et le Temple maudit",
    "Indiana Jones et la Dernière Croisade",
    "Indiana Jones et le Royaume du crâne de cristal",
    "Indiana Jones 5"
];

// Si tu n'as pas besoin des clés du tableau
foreach ($movies as $movie){
    // Do something...
    echo $movie;
    // Affiche "Les Aventuriers de l'arche perdue"
    // (au 1er tour, puis les autres valeurs aux tours suivants)
}

// Si tu as besoin des clés du tableau
foreach ($movies as $key => $movie){
    // Do something...
    echo $key;      // Affiche 0 (au 1er tour)
    echo $movie;    // Affiche "Les Aventuriers de l'arche perdue" (au 1er tour)
}


