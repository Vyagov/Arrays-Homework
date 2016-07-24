<?php
/* Да се състави програма, която въвежда в едномерен масив реални
числа.
Като изход: програма извежда онези 3 различни числа, чиято
абсолютна стойност формира максималната обща сума. */

require_once 'readline.php';

$array = [];
echo 'Enter "." the end of the array.', PHP_EOL;

do {
	$element = readline('Enter element: ');

	if ($element != '.') {
		$array[] = abs($element);
	}
} while ($element != '.');

$len = count($array);

for ($i = $len - 1; $i >= 0; $i--) {
	for ($j = $len - 1; $j >= 0; $j--) {
		if ($array[$i] < $array[$j]) {
			$tmp = $array[$i];
			$array[$i] = $array[$j];
			$array[$j] = $tmp;
		}
	}
}

$maxSum3Num[] = $array[0];
$counter = 1;

for ($i = 1; $i < $len; $i++) {
	if ($array[$i - 1] > $array[$i]) {
		$maxSum3Num[] = $array[$i];
		$counter++;
	}
	
	if ($counter == 3) {
		break;
	}
}

if ($counter < 3) {
	echo 'There is no 3 different numbers in the array.';
} else {
	echo "$maxSum3Num[2]; $maxSum3Num[1]; $maxSum3Num[0]";
}
