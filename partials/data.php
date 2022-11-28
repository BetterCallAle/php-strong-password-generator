<?php 
$user_length = $_GET["length"] ?? "";
$user_choice_letters = $_GET["letters"] ?? "";
$user_choice_numbers = $_GET["numbers"] ?? "";
$user_choice_symbols = $_GET["symbols"] ?? "";
$user_choices = [];

if($user_choice_letters){
    $user_choices[] = "letters";
}

if($user_choice_numbers){
    $user_choices[] = "numbers";
}

if($user_choice_symbols){
    $user_choices[] = "symbols";
}