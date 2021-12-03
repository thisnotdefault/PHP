<?php 

include "task4.php";
include "task5.php";

function translateText($text){
    return changeWhiteSpaces(translitString($text));
}
