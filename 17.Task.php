<?php
/* ���� ������ �� ���������� ����� �� �������� �������������� ������,
��� �� ���������� � �� ���������� ���������:
N1 < N2 > N3 < N4 > N5 <..
��������� ��������, ����� ��������� ���� �������� � ���������
����� ������ �� ����� ���������� ������� ����������. */

require_once 'readline.php';

echo 'Enter "." the end of the array.', PHP_EOL;
$array = [];
$counter = 1;

do {
	$element = readline("Enter $counter element: ");
	if ($element != '.') {
		$array []= $element;
	}
	$counter++;
} while ($element != '.');

$isJagged = true;

for ($i = 1; $i < count($array) - 1; $i += 2) {

	if (!($array[$i] > $array[$i - 1] && $array[$i] > $array[$i + 1])) {
		$isJagged = false;
		break;
	}
}

echo $isJagged ? 'The array is jugged.' : 'The array is not jugged.';
