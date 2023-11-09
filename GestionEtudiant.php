<?php

$etudiants =[
    [
        'nom'=>     "Doe",
        'prenom'=>  "john",
        'notes' => [1,1,1,1]
    ],
    [
        'nom'=>     "Marc",
        'prenom'=>  "yong",
        'notes' => [2,2,2,2]
    ],
    [
        'nom'=>     "Pierre",
        'prenom'=>  "LePain",
        'notes' =>[3,3,3,3]
    ]
];

// Affiche nom des eleves 

/* for($i =  0 ; $i <count($etudiants); $i++){
    echo "le nom de l'eleve $i est : ".$etudiants[$i]['nom'] ."\n";
} */

// Affiche moyenne de chaque Etudiant 

$somme = 0 ;

for($i = 0 ; $i < count($etudiants); $i++){

    ;
    echo "le nom de l'eleve $i est : ".$etudiants[$i]['nom'] ." , Notes : ";

    for($j = 0 ; $j < count($etudiants[$i]['notes']); $j++){

        $somme += $etudiants[$i]['notes'][$j];
        echo " ".$etudiants[$i]['notes'][$j];
    }
    echo " Finale note : $somme et de moyenne : " .$somme / count($etudiants[$i]['notes']);
    $somme = 0 ;
 
    // calcul moyenne 
    
    echo "\n";
}