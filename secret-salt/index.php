<?php
$givenWord = $argv[1];

$saltingValue = getenv('HASH_SALTING_VALUE');

if (rand(0,1)) {
	$fullValueForHashing = $saltingValue . $givenWord;
} else {
	$fullValueForHashing = $givenWord . $saltingValue;
}

echo hash('sha256', $fullValueForHashing);
