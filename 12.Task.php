<?php
/* �� �� ������� ��������, ���� ����� �� ������������� �������� 7
����� � ��������� ����� �� �������� ������� �� �������� � �������:
- 0 � 1 ���� ����� ����������;
- 2 � 3 ���� ��������;
- 4 � 5 ���� ���������. */

$array = [1, 2, 3, 4, 5, 6, 7];

$var = $array[0];
$array[0] = $array[1];
$array[1] = $var;

$array[2] += $array[3];
$array[3] = $array[2] - $array[3];
$array[2] -= $array[3];

$array[4] *= $array[5];
$array[5] = $array[4] / $array[5];
$array[4] /= $array[5];

foreach ($array as $value) {
	echo $value . ' ';
}

echo PHP_EOL;
print_r($array);
