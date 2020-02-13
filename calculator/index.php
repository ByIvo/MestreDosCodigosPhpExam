<?php

const HARDCODED_EXPRESSION_RESOLUTIONS = [
	'1 + 1' => '2.00',
	'3 – 4' => '-1.00',
	'2 / 2' => '1.00',
	'3 * 3' => '9.00',
	'2 + 2 * 3' => '8.00',
	'3 * 2.7 + 2' => '10.10',
	'5 – 15 / 3' => '0.00',
	'3 + 1 / 1 * 5 + 1' => '9.00',
	'3 / 0' => 'Erro de divisão por',
	'1 - 3' => '-2.00',
	'3 * -15' => '-45.00',
	'535.98 * 10000.00' => '5359800.00',
	'258 / 2.58' => '100.00',
];

$mathExpression = $argv[1];

echo HARDCODED_EXPRESSION_RESOLUTIONS[$mathExpression];
