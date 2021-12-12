<?php

require("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File upload</title>
	<link rel="stylesheet"  href="../css/styles.css"/>
</head>
<body>
<style>
	body {
		color: lightgreen;
	}
</style>
<?php


function resizeImage($h, $w, $src, $newsrc, $type) {
    $newimg = imagecreatetruecolor($h, $w);
    switch ($type) {
      case 'jpeg':
        $img = imagecreatefromjpeg($src);
        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
        imagejpeg($newimg, $newsrc);
        break;
      case 'png':
        $img = imagecreatefrompng($src);
        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
        imagepng($newimg, $newsrc);
        break;
      case 'gif':
        $img = imagecreatefromgif($src);
        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
        imagegif($newimg, $newsrc);
        break;
    }
}


if (isset($_POST['send'])) {
	if ($_FILES['userImage']['error']) {
		echo "Произошла ошибка при загрузке файла!";
	} elseif ($_FILES['userImage']['size'] > 1000000) {
		echo "Файл слишком большой!";
	} elseif (
		$_FILES['userImage']['type'] == 'image/jpeg' ||
		$_FILES['userImage']['type'] == 'image/png' ||
		$_FILES['userImage']['type'] == 'image/gif' 
		) {
			if (move_uploaded_file($_FILES['userImage']['tmp_name'], $path)){
				$type = explode('/', $_FILES['userImage']['type'])[1];
				resizeImage(200, 150, $path, $pathSmall, $type);
				echo "Файл успешно загружен!";
			}else {
				echo "Ошибка загрузки файла!";
			}
	} else {
		echo "Данное расширение файла недоступно!";
	}
};

header('Refresh: 3; url="../index.php"');

?>
</body>
</html>