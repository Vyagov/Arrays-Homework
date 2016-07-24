<?php
/* Да се състави програма, чрез която се въвеждат 7 цели числа в
едномерен масив.
Програмата да изведе числото, което е най-близко до средната
стойност на въведените числа. */

require_once 'readline.php';

$array = [];
$counter = 1;
$sum = 0;

echo 'Enter 7 integer numbers in a one-dimensional array.', PHP_EOL;

do {
	$element = readline("Enter $counter element: ");
	$sum += $element;
	$array[]= $element;
	$counter++;
} while (count($array) < 7);

$len = count($array);
$averageSum = $sum / 7;
$diff;

for ($i = 0; $i < $len; $i++) {
	$currentDiff = abs($averageSum - $array[$i]);

	if (!isset($diff) || $diff > $currentDiff) {
		$closestToAverage = $array[$i];
		$diff = $currentDiff;
	}
}

echo 'Average value of the array is ' . round($averageSum, 2) .
", closest element is $closestToAverage.";
