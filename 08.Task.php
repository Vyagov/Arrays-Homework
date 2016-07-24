<?php
/* Напишете програма, която намира и извежда най-дългата редица от
еднакви поредни елементи в даден масив. */

require_once 'readline.php';

echo "Enter the elements of the array on a single line separated by space:", PHP_EOL;
$input = readline();
$array = explode(" ", $input);

$currentCount = 1;
$currentMember = $array[0];
$counter = 0;
$member = 0;
$len = count($array);

for ($i = 1; $i < $len; $i++) {

	if ($currentMember == $array[$i]) {
		$currentCount++;
	} else {
		if ($currentCount > $counter) {
			$counter = $currentCount;
			$member = $currentMember;
		}
		$currentCount = 1;
		$currentMember = $array[$i];
	}
}

if ($currentCount > $counter) {
	$counter = $currentCount;
	$member = $currentMember;
}

echo 'The max sequence is: ';
for ($j = 0; $j < $counter; $j++) {
	echo "$member ";
}

