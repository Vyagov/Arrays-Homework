<?php
/* Да се състави програма, която въвежда от клавиатурата 7 цели числа
в едномерен масив
Програмата да изведе всички числа кратни на 5, но по големи от 5. */

require_once 'readline.php';

$array = [];
$counter = 1;
echo 'Enter 7 integer numbers in a one-dimensional array.', PHP_EOL;

do {
	$element = readline("Enter $counter element: ");
	$array[]= $element;
	$counter++;
} while (count($array) < 7);

$counter1 = 0;
for ($i = 0; $i < count($array); $i++) {

	if ($array[$i] % 5 == 0 && $array[$i] > 5) {
		$counter1++;
		echo $array[$i] . ', ';
	}
}

echo $counter1 > 1 ? $counter1 . ' numbers.' : $counter1 . ' number.';
