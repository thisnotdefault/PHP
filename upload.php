<link rel="stylesheet"  href="css/styles.css"/>
<?php


$path = "images/big/{$_FILES['userImage']['name']}";

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
				echo "Файл успешно загружен!";
			}else {
				echo "Ошибка загрузки файла!";
			}
	} else {
		echo "Данное расширение файла недоступно!";
	}
};

header('Refresh: 5; url="index.php"');

?>