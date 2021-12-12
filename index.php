<?php
    ini_set("display_errors",1);
    include_once("config.php");

    $sql = "SELECT * FROM gallery ORDER BY Views DESC";
    $table = mysqli_query($connect, $sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="css/styles.css"/>
    <title>Галерея</title>
</head>
<body>
    <br>
<h1 align="center"><span class="badge bg-secondary">Галерея</span></h1>
    <br>    

<div class="container">
    <div class="row">
        <?php

        
        while($data = mysqli_fetch_assoc($table)) :?>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" target="_blank" href="full_image.php?id=<?=$data['id']?>" data-lightbox="imgGLR" >
                <img class="img-responsive" border="0" src="images/small/<?=$data['Name']?>"/>
            </a>
        </div> 
        <?php endwhile;?> 
    </div>
</body>
</html>