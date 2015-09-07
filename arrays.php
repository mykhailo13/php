<?php


//Arrays

// indexed array
$langs = array('PHP', 'JavaScript', 'HTML', 'CSS');


echo $langs[3] . "<br>\n";
// add element to array
$langs[10] = 'Python';
$langs[] = 'Ruby';
// remove element from array
unset($langs[1]);

//print_r($langs);

//var_dump($langs);

// associated array

$user = [ 
	'name' => 'Mykhailo',
	'lang' => 'PHP',
	'city' => 'Kiew',
];

$user['vcs'] = 'Git';

echo $user['city'] . "<br>\n";


var_dump($user);



?>