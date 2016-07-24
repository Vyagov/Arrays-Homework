<?php
/* Да се прочете масив и да се намери най-малкото число кратно на
3 от масива.*/

require_once 'readline.php';

$array = [];
echo 'Enter the elements of the array for end enter ".":', PHP_EOL;

do {
	$element = readline('Enter an element: ');

	if ($element != '.') {
		$array[] = $element;
	}
} while ($element != '.');

$minValDiv3 = max($array);
$isDiv3 = false;

foreach ($array as $value) {
		if ($value % 3 == 0 && $minValDiv3 > $value) {
			$minValDiv3 = $value;
			$isDiv3 = true;
		}
}

if ($isDiv3) {
	echo 'The smallest number multiple of 3 is: ' . $minValDiv3;
} else {
	echo 'No numbers in the array multiple of 3.';
}
