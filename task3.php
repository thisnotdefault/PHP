<?php 

function sumTwoNumbers($a, $b){
    return $a + $b;
};

function diffTwhoNumbers($a, $b){
    return $a - $b;
};

function multTwoNumbers($a, $b){
    return $a * $b;
};

function divTwoNumbers($a, $b){
    if($b != 0){
        return $a / $b;
    } 
    return"Error! Detected divide to the zero!";
};

?>