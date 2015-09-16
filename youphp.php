<?php


 try {
 	$pdo = new PDO('mysql:host=localhost;port=3307;dbname=db12;charset=utf8', 'root', 'usbw');
 	$conn = $pdo->prepare('SELECT * FROM  `users` WHERE `name` =:name');
 		

 		$name = 'admin';
 		$conn->bindParam(":name",$name);

 		$conn->execute();
 		$users = $conn->fetchAll(PDO::FETCH_ASSOC);
 		



 		print_r($users);



 } catch (PDOException $e) {
 	print "ERROR!: " . $e->getMEssage() . "<br/>";
 	die();
 }













?>