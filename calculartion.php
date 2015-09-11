<?php 
//print_r($_GET);
$result = 0;
if (isset($_GET['First'])  && isset($_GET['Second'])  && isset($_GET['Operation'])){
$first = $_GET['First'];
$second = $_GET['Second'];

$operation = $_GET['Operation'];

	 if ($operation == "+") {
	    $result =  ($first + $second); 
	 } elseif ($operation == "-") {
	 	$result = ($first - $second);
	 }elseif ($operation == "*") {
	 	$result = ($first * $second);
	 } else {
	 	$result = ($first / $second);
	 }
}	 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> 
	<form action="">
		<input type="text" name="First" value="">
		<select name="Operation">
  			<option value="+">Плюс</option>
  			<option value="-">Минус</option>
  			<option value="*">Умножить</option>
  			<option value="/">Разделить</option>
		</select>
		<input type="text" name="Second" value="">
		<input type="submit" value="Посчитать">

	</form>
	<p>Результат <?= $result?></p>
	
</body>
</html>












