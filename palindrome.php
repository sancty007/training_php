<?php
    function IsPalindrome($phrase) {

        $phrase = strtolower($phrase);
        $newString = preg_replace( '/[\W]/', '',$phrase);

        $reverseStr =strrev($newString);

        if ($newString == $reverseStr){
            return true;
        }
    }  
    
    $var = "Eva, Can I See Bees In A Cave?";
    
    if (ispalindrome($var)){
        print_r("La phrase est un palindrome");
    }else{
        
        print_r("La phrase n'est pas  un palindrome");
    }
 



    
   
    


