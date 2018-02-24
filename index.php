<?php
////echo 'test';
//
//echo "test" . PHP_EOL;
//
////echo ("test","test"); //ошибка
//echo("test" . "test".PHP_EOL);
//

$boolean = false;
$int = 3;
$float = 3.25;
$string = "asd";

$array = [ 0 => 123, 1 => 'abc'];
$array2 = [ 'asd' => 'aaa'];
$object = new stdClass();
$object->a = 2;

var_dump($boolean);
echo "<br>";
var_dump($int);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($string);
echo "<br>";
echo "<pre>";
print_r($array);
var_dump($array2);
echo "<br>";
var_dump($object);
echo "<br>";

$string = '123asd';
$int = 1;
echo $string . $int;

//echo ($string + $integer);
die();
//$a = 0;
//echo ++$a;
//echo $a;
//echo PHP_EOL;
//$a = 0;
//echo $a++;
//echo $a;
$a['a'] = 123;

//echo "Stroka: ".$a['a'];
//$a = null;
//$result = isset($a);
//var_dump($result);
$a = '';
$result = empty($a);
echo 'is_empty: '. empty($a).PHP_EOL;
echo 'is_isset'. isset($a);
//var_dump($result);

define('ASD', 'что-нибудь');
const ASDD = 'asd';
echo ASDD;
echo ASD;