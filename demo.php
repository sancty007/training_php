<?php

    $prenom = "Marc";
    $nom    = "Doe";
    //simplication du code 
    $notes =[10,20];
    $somme = 0;
    for ($i = 0; $i <= count($notes); $i++) {
       $somme +=$i; 
    }
    $moyenne = $somme / count($notes);
    
    echo "Bonjour $prenom $nom vous avez eu $moyenne de moyenne";