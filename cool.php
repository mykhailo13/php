

<?php
// var_dump($_POST);
 //var_dump($_FILES);
$uploads_dir = 'uploads';

if (count($_FILES)) {


	foreach ($_FILES as $file) {
	
	$name = $_FILES['file']['name'];
	$tmp_name = $_FILES['file']['tmp_name'];

		move_uploaded_file($tmp_name, $uploads_dir . '\\' . $name);
	}
}

// file_put_contents($name, $tmp_name);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST" enctype = "multipart/form-data">
		<input type="file" name="file" multiple>
		<input type="submit" value = "Send file">


	</form>
	
</body>
</html>




































