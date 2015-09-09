<?php

// $array = [
// 	'1',
// 	'7',
// 	'10',
// 	'2'
// ];

 // foreach ($array as $value) {
 // 	//  echo $value . '<br>'; 
 // 	if ($value <= 7) {
 // 		echo $value . '<br>'; } 
 // }


// цыклы

//for ($i=0; $i < count($array) ; $i++) { 
//	echo $array[$i] . '<br>';}

// $i = 0;
// while ($i < count($array)) {
// 	echo $array[$i] . '<br>';
// 	$i++;
// }

// $i = 0;
// do {
// 	echo $array[$i] . '<br>';
// 	$i++;
// }while ($i < count($array)) 
// $i = 5;
// if ($i <= 7) {
// 	echo '< 7';
// }

// if ($i <= 7) {
// 	echo '< 7';
// } else {
// 	echo '> 7';
// }

// if ($i == 7) {
// 	echo '< 7';
// } elseif ($i <= 7 && $i >= 4) {
// 	echo '> 7 but < 4';	
// } elseif ($i <= 7 && $i >= 4) {
// 	echo '> 7 but < 4';	
// } elseif ($i <= 7 && $i >= 4) {
// 	echo '> 7 but < 4';	
// } elseif ($i <= 7 && $i >= 4) {
// 	echo '> 7 but < 4';	
// } elseif ($i <= 7 && $i >= 4) {
// 	echo '> 7 but < 4';	
// } elseif ($i <= 7 && $i >= 4) {
// 	echo '> 7 but < 4';	
// } elseif ($i <= 7 && $i >= 4) {
// 	echo '> 7 but < 4';	
// } else {
// 	echo ' < 4 ';
// }
// $i = 4;
// switch ($i) {
// 	case '1':
// 		echo '$i = 1';
// 		break;
// 	case '2':
// 		echo '$i = 2';
// 		break;
// 	case '3':
// 		echo '$i = 3';
// 		break;
	
// 	default:
// 		echo 'i going home';
// 		break;
// }



// $array = [
// 	'first' => '1',
// 	'second' => '7',
// 	'third' => '10',
// 	'fourth' => '26890'
// ];

// //echo $array['third'];


// $a = array_pop($array). "<br>\n";
// echo $a;

// print_r($array);

// $a = array_push($array, '45658679780', '35476599');
// print_r($array);


// $name = "Barak";
// $email = 'barak_washingtom@gmail.com';
// $message = 'blablablairaq';

// function myfirstfunction($name, $email, $message) {
// 	$to      = $email;
// 	$subject = 'Hello' . $name;
// 	$headers = 'From: webmaster@example.com' . "\r\n" .
// 	    'Reply-To: webmaster@example.com' . "\r\n" ;
	
// // 	mail($to, $subject, $message, $headers);

// 	    	echo $name . '<br>';
// 			echo $message . '<br>';
// 			echo $email . '<br>';

// }



// myfirstfunction($name, $email, $message);



$a = ['101', '1000', '5', '55'];


function maxValue($a) {

	if( !is_array($a)) {
		return 'gogogobeeer!';
	}


	$max = null;
	
	foreach ($a as $value) {
		if ($max == null) {
			$max = $value;
		}
		if ($max > $value) {
			$max = $value;
		}
	}
	return $max;
	



}

//echo maxValue($a);
echo maxValue(3);











?>

















