<?php 
ini_set("display_errors", 1);

/** 
 * час - 1,
 * минута -1
 * часа - 2,3,4
 * минуты - 2,3,4,
 * часов - 5,6,7,8,9,....0
 * минут - 5,6,7,8,9 .....0
*/

$hour = date("H");
$minute = date("i");

if($hour == 1 || $hour == 21){
    $hours = " час";
}elseif(($hour >= 2 && $hour <= 4) || ($hour >= 22 && $hour < 00)){
    $hours = " часа";
}else{
    $hours = " часов";
}

if($minute % 10 == 1 && $minute != 11){
    $minutes = " минута";
}elseif(($minute % 10 >= 2) && ($minute % 10 <= 4)){
    $minutes = " минуты";
}else{
    $minutes = " минут";
}

echo "{$hour} {$hours} {$minute} {$minutes}";