<?php
/* Да се въведе число, след което да се създаде масив с 10
елемента по следния начин:
Първите 2 елемента на масива са въведеното число.
Всеки следващ елемент на масива е равен на сбора от
предишните 2 елемента в масива.
След това изведете масива . */

require_once 'readline.php';

$valid = true;
do {
	if (!$valid) {
		echo 'Enter a valid number!', PHP_EOL;
	}
	$valid = false;
	$num = readline('Enter a number: ');
} while (!is_numeric($num));

$array = [$num, $num];

for ($i = 2; $i < 10; $i++) {

	$array[] = $array[$i - 1] + $array[$i - 2];
}

foreach ($array as $value) {
	echo $value . ' ';
}

