<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc2</title>
</head>
<body>
    <form action="" method="post">
    <input type="number" name="number">
    <input type="number" name="number2">
    <br>
    <br>
    <button type="submit" name="operation" value = "+">+</button>
    <button type="submit" name="operation" value = "-">-</button>
    <button type="submit" name="operation" value = "*">*</button>
    <button type="submit" name="operation" value = "/">/</button>
    </form>

    <?php
        $number = (int)($_POST['number']);
        $number2 = (int)($_POST['number2']);
        if (isset($_POST['operation'])){
            if($number === "" || $number2 === ""){
                $result = "Ошибка, укажите корректные числа!";
            }else {
                switch ($_POST['operation']){
                    case '+':
                        $result = $number + $number2;
                        break;
                
                    case '-':
                        $result = $number - $number2;
                        break;

                    case '*':
                        $result = $number * $number2;
                        break;
                    
                    case '/':
                        if ($number2 == 0) {
                            $result = "Ошибка обнаружено деление на ноль!";
                        } else {
                            $result = $number / $number2;
                        }
                        break;
                    default:
                        $result = "Ошибка сервера!";
                        break;
                }   
            }
        }

        echo "<h3>Результат:</h3> $result"
    ?>


</body>
</html>