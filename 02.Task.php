<?php
/* ���� �� ������� ����� �� �� ���������� ���, ���� ���������� ��
�������� �� ����� ���� �� �����������, � ������� �� �� ����
��������, �� � ������� ���. ��������, �� �� ������ ����� �����
�� ������. */

$array = [10, 9, 8, 7, 6, 5, 4];

$newArray = [];

echo 'The array is:', PHP_EOL;

foreach ($array as $value) {
	echo $value . ' ';
	$newArray[] = $value;
}

$len = count($array);

for ($i = $len - 1; $i >= 0; $i--) {
	$newArray[] = $array[$i];
}

echo PHP_EOL;
echo 'The new array is:', PHP_EOL;
foreach ($newArray as $newValue) {
	echo $newValue . ' ';
}