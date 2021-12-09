<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/styles.css"/>
    <title>Full screen</title>
</head>
<body>
    <div align="center">
        <img  width="1000" src="images/big/<?= $_GET["image"] ?>" alt="<?= $_GET["file"] ?>"><br>
    </div>
    <br>
    <div align="center">
        <a href="<?= $_SERVER["HTTP_REFERER"]?>">Галерея</a>    
    </div>
</body>
</html>