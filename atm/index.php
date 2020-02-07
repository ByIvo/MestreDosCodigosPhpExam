<?php

const EXISTING_BILLS = [100, 50, 20, 10, 5, 1];

$withdrawAmountLeft = $argv[1];

if ($withdrawAmountLeft < 1) {
	echo 'Este valor não é válido';
	die();
}

$withdrawBills = [];

foreach(EXISTING_BILLS as $billValue) {
	if ($withdrawAmountLeft >= $billValue) {
		$withdrawBills[$billValue] = floor($withdrawAmountLeft / $billValue);
		$withdrawAmountLeft %= $billValue;
	}
}

$withdrawResult = '';
foreach($withdrawBills as $withdrawBill => $withdrawQuantity) {
	$isFirstLoop = empty($withdrawResult);

	$separator = $isFirstLoop ? '' : ', ';
	$withdrawResult .= $separator . "$withdrawBill => $withdrawQuantity";
}

echo "[$withdrawResult]";
