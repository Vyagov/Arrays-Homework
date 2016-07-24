<?php
//Да се прочете масив и да се отпечата дали е огледален.

require_once 'readline.php';

$array = [];
$counter = 1;
echo 'Enter "." the end of the array.', PHP_EOL;

do {
	$element = readline("Enter $counter element of the array:" . PHP_EOL);
	if ($element != '.') {
		$array[]= $element;
	}
	$counter++;
} while ($element != '.');

$isMirror = true;
$len = count($array);

for ($i = 0, $j = $len - 1; $i > $j; $i++, $j--) {

	if ($array[$i] != $array[$j]) {
		$isMirror = false;
		break;
	}
}

echo 'The array is ';
echo $isMirror ? 'mirror.' : 'not mirror.';
