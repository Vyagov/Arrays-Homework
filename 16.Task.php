<?php
/* �� �� ������� ��������, ���� ����� ������������� �������� 10
������ ����� �� ��������� �� ���������� �� ������� �����:
1. ������� �������������� �����.
2. ������ �������� ��� �������� ��-����� �� -0.231 �� ������� ���
������ �� �������� �� ������� �� + ������� 41.25, � ������ ��������
�������� �� ������� � �������������� ����� ����� ������� �
�������� ������� �����
3. �� �� ������� ���������� �� �������� � ��������������� �����.
4. �� �� ������� �������� �������� �� ������ �������� �� ������
������, ����� �� �������� �� 0. */

$array = [-1.12, -2.43, 3.1, 4.2, 0, 6.4, -7.5, 8.6, 9.1, -4];

echo 'Initial array:', PHP_EOL;

foreach ($array as $value) {
	echo "$value ";
}

for ($i = 0; $i < count($array); $i++) {

	if ($array[$i] < -0.231) {
		$array[$i] = $i ** 2 + 41.25;
	} else {
		//I accept that the sequential number of the element is ($i + 1);
		$array[$i] *= ($i + 1);
	}
}

echo PHP_EOL;
echo 'The newly created array:', PHP_EOL;

$sum = 0;
$counter = 0;

for ($i = 0; $i < count($array); $i++) {
	
	echo $array[$i] . ' ';

	if ($array[$i] != 0) {
		$sum += $array[$i];
		$counter++;
	}
}

echo PHP_EOL;
echo 'Average of all elements different than 0: '
		. round($sum / $counter, 2);
