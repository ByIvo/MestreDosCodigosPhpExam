<?php

$valueToReturn = '';
$input = $argv[1];

if ($input % 3 === 0) {
	$valueToReturn .= 'Foo';
}

if ($input % 5 === 0) {
	$valueToReturn .= 'Bar';
}

if (empty($valueToReturn)) {
	echo $input;
}

echo $valueToReturn;
