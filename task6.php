<?php

function power($val,$pow){
    if ($pow <= 1){
        return $val;
    }
    return $val *= pow($val,$pow -1);
}

echo power(4,3);

?>