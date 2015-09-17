<?php

$curl =curl_init();
	
	$url = 'http://www.php.su/lessons/?lesson_11';

	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1)
	 AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	$result = curl_exec($curl);

	$result = iconv("windows-1251", "UTF-8", $result);

curl_close($curl);

file_put_contents('1.hltml', $result);
// var_dump($result);

?>

<?php
// Регулярные Выражения

$str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
 Nisi cum cumque nostrum qui labore harum quibusdam sit nihil,
 hic sint, rem ratione ea magni,Ipsum illo ducimus fugiat consequuntur provident suscipit. ";

 // $uri = $_SERVER['REQUEST_URI'];
 // echo $uri;
 // echo '<br>';

 // if (preg_match('/regular/', $uri)) {
 // 	$preg_match = preg_match('/dolor/', $str);
 // 	echo $preg_match;
 // 	 }

// $replace = preg_replace('/ipsum/i', 'dtfdfhgjhjhfkjjldtyjs', $str);
// echo $str . '<br>' . $replace;;

// $digit = 555;
// $mail = 'mail@gmail.com';
// $str_digit = '555-111-333';
// var_dump(preg_match('^[0-9]{3}-[0-9]{3}-[0-9]{3}', $str_digit));

// $str_and_digit = 'John Doe want to be the 1st in the world';
// $str_and_digit2 = 'Variables = 4';

?>
<?php


 class SimpleClass
 {
 	
 	function __construct(argument)
 	{
 		# code...
 	}
 } SimpleClass();

    public $var;

    // объявление метода
    public function getVar() {
        echo $this->var;
	}
	public function setVar($a) {
         $this->var = $a;
    }
}

$a = new SimpleClass();
// $a->getVar();
// $a->setVar(5);
// $a->getVar();

class ExtendedClass extends SimpleClass
{
	public $var2 = 99;

	public function getVar2() {
        echo $this->var2;
	}
	public function setVar2($a) {
         $this->var2 = $a;
    }
}


$b = new ExtendedClass();
$b->setVar(6);
$b->getVar();
$b->getVar2();
$b->setVar2('hello world!=)');
$b->getVar2();








?>

