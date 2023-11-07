<?php

$etudiants =[
    [
        'nom'=>     "Doe",
        'prenom'=>  "john",
        'notes' => [10,12,10,9]
    ],
    [
        'nom'=>     "Marc",
        'prenom'=>  "yong",
        'notes' => [10,12,10,9]
    ],
    [
        'nom'=>     "Pierre",
        'prenom'=>  "LePain",
        'notes' =>[10,12,10,9]
    ]
];


for($i =0 ; $i <count($etudiants); $i++){
    echo "le nom de l'eleve $i est : ".$etudiants[$i]['nom'] ."\n";
}