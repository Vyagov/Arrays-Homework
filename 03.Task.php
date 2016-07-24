<?php
/* �� �� ������ �����, ���� ����� �� �� ������� ����� � 10
�������� �� ������� �����:
������� 2 �������� �� ������ �� ���������� �����.
����� ������� ������� �� ������ � ����� �� ����� ��
���������� 2 �������� � ������.
���� ���� �������� ������ . */

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

