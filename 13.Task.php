<?php
/* �� �� ������� ��������, ���� ����� �� ������� ����� � �� ���������
���� ����� � ������� ������ �������.
����������, ���� �����, �� ��������� �������������� ������ �����
�� ���������� ���������� ����� � 2-���� ������ �������. */

require_once 'readline.php';

do {
	$decNum = readline('Enter a natural number in: ');
} while ($decNum < 0);

$array = [];

do {
	if ($decNum % 2) {
		$binNum = 1;
	} else {
		$binNum = 0;
	}
	$decNum = (int)($decNum / 2);
	$array[] = $binNum;
} while ($decNum > 0);

//$array = array_reverse($array);

for ($i = 0, $j = count($array) - 1; $i < $j; $i++, $j--) {
	$tmp = $array[$i];
	$array[$i] = $array[$j];
	$array[$j] = $tmp;
}

echo 'The number presented in binary system: ';

foreach ($array as $value) {
	echo $value;
}