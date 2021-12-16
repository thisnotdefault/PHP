<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>
    <?php
    
    if (isset($_GET['a']))
        $a = (int)($_GET['a']);

    if (isset($_GET['b']))
        $b = (int)($_GET['b']);

    if (isset($_GET['sign']))
        $sign = $_GET['sign'];
    
    if (isset($a) && isset($b)){
        switch ($sign){
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
            case '*':
                $result = $a * $b;
                break;
            case '/':
                if ($b == 0){
                    $result = "Ошибка, обнаружено деление на нуль!";
                }else {
                    $result = $a / $b;
                }
        }
    }
    

    ?>

    <form action="" method="get">
        <input type="number" name="a" value="<?= $a?>">
        <select name="sign" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="b" value="<?= $b?>">
        <input type="submit" value="=">
        <?php echo $result?>
    </form>
</body>
</html>