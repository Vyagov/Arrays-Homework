<?php
/* Дадени са два едномерни масива с естествени числа.
Да се състави програма, която сравнява всички числа с еднакви
индекси от двата масива и записва в трети масив, по-голямото от
двете числа.
Да се изведе съдържанието и на трите масива. */

$firstArray = [18,19,32,1,3, 4, 5, 6, 7, 8];
$secondArray = [1, 2, 3,4,5,16,17,18,27,11];

$len = count($firstArray) <= count($secondArray) ? count($firstArray) : count($secondArray);
$biggerNumArray = [];

for ($i = 0; $i < $len; $i++) {

	$biggerNumArray[] = $firstArray[$i] > $secondArray[$i] ? $firstArray[$i] : $secondArray[$i];
}

echo 'First array:', PHP_EOL;

foreach ($firstArray as $value) {
	echo "$value ";
}

echo PHP_EOL, 'Second array:', PHP_EOL;

foreach ($secondArray as $value1) {
	echo "$value1 ";
}

echo PHP_EOL, 'Array of the bigger numbers:', PHP_EOL;

foreach ($biggerNumArray as $value2) {
	echo "$value2 ";
}
