<?php

$number = $argv[1];

$finalMessage = '';

if ($number % 3 === 0) {
	$finalMessage .= 'Fizz';
}

if ($number % 5 === 0) {
	$finalMessage .= 'Buzz';
}

if (empty($finalMessage)) {
	echo $number;
}

echo $finalMessage;
