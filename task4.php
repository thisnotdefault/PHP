<?php

// ini_set('display_errors', 1);

include 'task3.php';

function mathOperation($arg1, $arg2, $operation){

    switch($operation){
        case '+':
            return sumTwoNumbers($arg1,arg2);
        case '-':
            return diffTwhoNumbers($arg1,$arg2);
        case '*':
            return multTwoNumbers($arg1,$arg2);
        case '/':
            return divTwoNumbers($arg1,$arg2);
    }
}
                            // тут хочу передать функцию
// echo "Сумма двух чисел: "{mathOperation(6,3,'+')}" <br>"; // как правильно написать эту строку без "." ?

echo "<h4>Результат</h4>";
echo "Сумма двух чисел: ".mathOperation(6,3,'+')."<br>";
echo "Разность двух чисел : ".mathOperation(6,3,'-')."<br>";
echo "Произведение двух чисел: ".mathOperation(6,3,'*')."<br>";
echo "Деление двух чисел: ".mathOperation(6,3,'/');
?>