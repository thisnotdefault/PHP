<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="css/styles.css"/>
    <title>Full screen</title>
</head>
<body>
    <br>
    <h1 align="center"><span class="badge bg-secondary">Галерея</span></h1>
    <br>
    
    <?php
        ini_set("display_errors",1);
        include_once("config.php");

        $ImageId = $_GET['id'];
        $sqlImage = "SELECT * FROM gallery WHERE id = '$ImageId'";

        if (mysqli_query($connect, $sqlImage)){
            $image = mysqli_fetch_assoc(mysqli_query($connect, $sqlImage));
            $update = "UPDATE gallery SET Views=Views+1 WHERE id=$ImageId";
            mysqli_query($connect, $update);
        }
    ?>



    <div align="center">
        <img width="<?=$image["Size"]?>" src="images/big/<?=$image["Name"]?>">
        <br>
        <h2 class="count">Просмотров: <?= ++$image['Views'] ?></h2>
    </div>
    <br>
    <div align="center">
        <h3><a href="<?= $_SERVER["HTTP_REFERER"]?>">Галерея</a></h3>    
    </div>
</body>
</html>