<?php
/* ����� ������������� ������� ��������� �����, �������� ������
�����.
�� �� ������� ��������, ���� ����� �� ������� ���� �������� ���
��������� �� ��������� [-2.99..2.99] � ������ ������ �� ������� ��
������. */

$array = [7.1, 8.5, 0.2, 3.7, 0.99, 1.4, -3.5, -1.1, 2.2, 3.41, 1.2];

$len = count($array);
$inInterval = false;

for ($i = 0; $i < $len; $i++) {

	if ($array[$i] >= -2.99 && $array[$i] <= 2.99) {
		echo $i < count($array) - 1 ? $array[$i] . '; ' : $array[$i];
		$inInterval = true;
	}
}

if (!$inInterval) {
	echo 'No numbers with values from the interval.';
}