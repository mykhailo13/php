<?php

// print_r($_GET);
// print_r($_POST);
// echo $_POST['name_book'];
// echo $_POST['author_book'];

$






?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="" method = "POST">
		<input type="text" name = "name_book" value = "<?php if (isset($_POST['name_book'])) echo $_POST['name_book'];?>"
		 placeholder = "Название книги">
		<br><br><br>
		<input type="text" name = "author_book" value = "<?php if (isset($_POST['author_book'])) echo $_POST['author_book'];?>" placeholder = " Автор">
		<br><br><br>
		<input type="submit" value = "Сохранить">
	</form>
</body>
</html>

