<?php

function writeSecretSentence (string $guessedAnimal, string $guessedObject):string
{
    return $guessedAnimal . ' s\'incline face à ' . $guessedObject;
}

echo writeSecretSentence('le bernard l\'hermite', 'la voie lactée');