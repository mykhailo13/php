


<?php
//echo 'hello world<br>';
$count = 5;

$price = 123;

$totalPrice = $count * $price;

//echo 'Total price' . $totalPrice . '$';




// boolean: true false 
$name = 'Mykhailo';

$isBlocked = false;

if ($isBlocked) {
	echo "$name You are blocked<br>";
} else {
	echo "$name welcome<br>";
}

echo "Total price: $totalPrice" . '$<br>';

if ($totalPrice >= 1000 or $totalPrice == 500) {
	echo 'You have 25% discount<br>';
} elseif ($totalPrice >= 600) {
	echo 'You have 15% discount<br>';
} elseif ($totalPrice >= 400) {
	echo 'You have 10% discount<br>';
} else { 
	echo 'You have 5% discount<br>';
}

if ($count === '5') {
	echo "Count: $count<br>";
}
// true proof



?>



























