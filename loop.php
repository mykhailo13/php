<?php

$user1 = [ 
	'name' => 'Mykhailo',
	'lang' => 'PHP',
	'city' => 'Kiew',
];

$user2 = [ 
	'name' => 'Viktor',
	'lang' => 'CSS',
	'city' => 'Wien',
];

$user3 = [ 
	'name' => 'Barack',
	'lang' => 'HTML',
	'city' => 'Washington',
]; 

$users = [
	'I' => $user1, 
	'my friend' => $user2,
	'Obama' => $user3
];

// echo $users[1]['lang']; 
// var_dump($users);

// $i = $i + 1 => $i++
// $i = $i - 1 => $i--
// $count = count($users);
// for ($i = 0; $i < $count; $i++) {
// 	 	echo $users[$i]['name'] . '<br>';
// 		echo $users[$i]['lang'] . '<br>';
// 		echo $users[$i]['city'] . '<br>';
// } 

 /*foreach ($users as $user) {
 	echo $user['name'] . '<br>';
	echo $user['lang'] . '<br>';
	echo $user['city'] . '<br>';
 }

*/


/*
<?php echo $var ?> = <?= var?>
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
	<style>
	.heading {
	color: #C5B323;
	 font-size: 28px;
	}
	.green {
	    color: #8C0909
	}	
	</style>
<body>
	<h1>User list</h1>

<?php foreach ($users as $status => $user) : ?>
	<h2 class = "heading"><?= $user['name'] ?></h2>
	<p>Status: <?= $status ?></p>
	<p>Language: <strong><?= $user['lang'] ?></strong></p>
	<p>City: <strong class = "green"><?= $user['city'] ?></strong></p>
<?php endforeach ?>

</body>
</html>














