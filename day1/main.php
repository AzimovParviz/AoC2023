<?php

//1abc2
//pqr3stu8vwx
//a1b2c3d4e5f
//treb7uchet

//test input

$input = file('input.txt');
$num_str = '';
$sum = 0;


enum Numbers: int {
	case one = 1;
	case two = 2;
	case three = 3;
	case four = 4;
	case five = 5;
	case six = 6;
	case seven = 7;
	case eight = 8;
	case nine = 9;
};

$numbers = Numbers::cases();

foreach ($input as $a) {
	foreach ($numbers as $lit_num) {
		$a = str_replace($lit_num->name, $lit_num->value, $a);
		var_dump($a);
	}
	//$a = str_replace(array_column(Numbers::cases(), 'name'), "", $a);
	
	foreach (str_split($a) as $li) {
		if (ord($li) < 58) {
			$num_str = $num_str . $li;
		}
	}

	if (ord($num_str[0]) >= 48) {
		//var_dump($num_str[0] . $num_str[strlen($num_str) - 2]);
		$sum += (int)($num_str[0] . $num_str[strlen($num_str) - 2]);
	}
	$num_str = '';
}
var_dump($sum);
