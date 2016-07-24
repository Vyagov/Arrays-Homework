<?php
/* �������� ��������, � ����� ����������� ������� �����, ���� �����
���������� �� ������ �� ������� � ������� ��� (����� �� � ������ ��
�� �������� � ������� ���, ��� ����� �� �� ������, ���� ����� �� ��
�������� � �������� ���). ��������� �� ������ �������� ����� � ����
������������ ����� � ����� ��� �� ���������� ���� �����. */

require_once 'readline.php';

$array = [];
$counter = 1;
echo 'Enter "." the end of the array.', PHP_EOL;

do {
	$element = readline("Enter $counter element: ");
	if ($element != '.') {
		$array[]= $element;
	}
	$counter++;
} while ($element != '.');

echo 'With additional array.', PHP_EOL;

$newArray = [];

for ($i = count($array) - 1; $i >= 0; $i--) {

	$newElement = $array[$i];
	$newArray[] = $newElement;
	echo $newElement . ' ';
}

echo PHP_EOL;
print_r($newArray);

echo '...................................', PHP_EOL;

echo 'Without using another array.', PHP_EOL;

for ($i = 0, $j = count($array) - 1; $i < $j; $i++, $j--) {

	$tmp = $array[$i];
	$array[$i] = $array[$j];
	$array[$j] = $tmp;
}

foreach ($array as $value) {
	echo $value . ' ';
}

echo PHP_EOL;
print_r($array);