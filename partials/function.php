<?php
include __DIR__ . "./data.php";

// take a random letter from a string
function take_rdn_letter_from_string($string){
    // take a substring from a string, take a random number from 0 to the string length and go forward by 1
    return substr($string, rand(0, strlen($string)), 1);
}

// Function for generate a random string
function generate_rdn_password($length, $get_array){
    // create a variable for storing the long generated password
    $temp_pass = "";
    $letters = "abcdefghijklmnopqrstuvwxyz";
    $symbols = "-_.%!#:;,+/";

    for($i = 0; $i <= $length; $i++){

        if(in_array("letters", $get_array)){
            // take a random letter from string
            $rdn_letter = take_rdn_letter_from_string($letters);

            // take a radom letter from string and make it uppercase
            $rnd_letter_upper = strtoupper(take_rdn_letter_from_string($letters));
            
        } else {
            $rdn_letter = "";
            $rnd_letter_upper = "";
        }

        if(in_array("numbers", $get_array)){
            // take a random number from 0 to 9
            $rnd_number = rand(0, 9);
        } else {
            $rnd_number = "";
        }
        
        if(in_array("symbols", $get_array)){
             // take a random symbol
            $rnd_symbol = take_rdn_letter_from_string($symbols);
        } else {
            $rnd_symbol = "";
        }
    
        // return all the variables combined
        $temp_pass .= $rdn_letter . $rnd_number . $rnd_letter_upper . $rnd_symbol;
    }

    return substr($temp_pass, 0, $length);
}



?>