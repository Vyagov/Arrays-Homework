<?php
/* Напишете програма, която първо чете 2 масива и после извежда
съобщение дали са еднакви, и дали са с еднакъв размер. */

require_once 'readline.php';

$firstArray = [];
$counter = 1;
echo 'Enter 2 arrays.', PHP_EOL;
echo 'For the end of the first array enter ";".', PHP_EOL;
echo 'For the end of the second array enter ".".', PHP_EOL;

do {
	$element = readline("Enter $counter element of the first array: ");
	if ($element != ';') {
		$firstArray[]= $element;
	}
	$counter++;
} while ($element != ';');

$secondArray = [];
$counter = 1;

do {
	$element1 = readline("Enter $counter element of the second array: ");
	if ($element1 != '.') {
		$secondArray[]= $element1;
	}
	$counter++;
} while ($element1 != '.');

$len1 = count($firstArray);
$len2 = count($secondArray);
$end = $len1 < $len2 ? $len1 : $len2;
$areSame = false;

for ($i = 0; $i < $end; $i++) {

	if ($len1 == $len2 && $firstArray[$i] == $secondArray[$i]) {
		$areSame = true;
	}
}

echo $areSame ? 'The arrays are the same.'
		: 'The arrays are not the same.', PHP_EOL;

echo $len1 == $len2 ? 'The arrays have equal size.'
		: 'The arrays have different size.';

