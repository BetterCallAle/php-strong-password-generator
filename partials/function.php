<?php
include __DIR__ . "./data.php";

// take a random letter from a string
function take_rdn_letter_from_string($string){
    // take a substring from a string, take a random number from 0 to the string length and go forward by 1
    return substr($string, rand(0, strlen($string)), 1);
}

// Function for generate a random password
function generate_rdn_password($letters, $symbols){
    // take a random letter from string
    $rdn_letter = take_rdn_letter_from_string($letters);
    // take a random number from 0 to 9
    $rdn_number = rand(0, 9);
    // take a radom letter from string and make it uppercase
    $rnd_letter_upper = strtoupper(take_rdn_letter_from_string($letters));
    // take a random symbol
    $rnd_symbol = take_rdn_letter_from_string($symbols);

    // return all the variables combined
    return $rdn_letter . $rdn_number . $rnd_letter_upper . $rnd_symbol;
}

?>