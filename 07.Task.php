<?php
/* Напишете програма, която първо чете масив и после създава нов
масив със същия размер по следния начин: стойността на всеки
елемент от втория масив да е равна на сбора от предходния и
следващият елемент на съответния елемент от първия масив.
Да се изведе получения масив. */

require_once 'readline.php';

$array = [];
$counter = 1;
echo 'Input numbers, for the end of the array enter ".".', PHP_EOL;

do {
	$value = readline("Enter $counter element: ");
	if ($value != '.') {
		$array[]= $value;
	}
	$counter++;
} while ($value != '.');

$newArray = [];
echo 'The obtained array is: ';

for ($i = 0; $i < count($array); $i++) {

	if ($i == 0) {
		$newValue = $array[$i + 1];
	} else if ($i == count($array) - 1) {
		$newValue = $array[count($array) - 2];
	} else {
		$newValue = $array[$i - 1] + $array[$i + 1];
	}
	$newArray[] = $newValue;
	echo $newValue . ' ';
}

print_r($newArray);