<?php 

$a = -7;
$b = 0;

if($a >= 0 && $b >= 0){
    echo $a - $b;
}else if($a < 0 && $b < 0){
    echo $a * $b;
}else{
    echo $a + $b;
}

?>