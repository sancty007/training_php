<?php
    function IsPalindrome($phrase) {
        $newString = preg_replace( '/[\W]/', '',strtolower($phrase));
        if ($newString == strrev($newString)){
            return true;
        }
    }  

    $var = "Eva, Can I See Bees In A Cave?";
    
    if (ispalindrome($var)){
        print_r("La phrase est un palindrome");
    }else{
        
        print_r("La phrase n'est pas  un palindrome");
    }
 



    
   
    


