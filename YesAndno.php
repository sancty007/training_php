<?php

function repondre_oui_non($phrase){

    while(true){
        
        $phrase = readline($phrase." "."(O)ui ou (N)n : ");

        if($phrase === "o"){
            return true ;
        }
        elseif ($phrase === "n") {
            return false ;
        }
        else {
            continue;
        }

    }
}

$resultat = repondre_oui_non("Voulez vous continuer ?");


var_dump($resultat);



