<?php

const IP_ADDRESS_PATTERN = '/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/';
const CREDIT_CARD_PATTERN = '/(\d{4}) \d{4} \d{4} (\d{4})/';
const CVV_PATTERN = '/(cvv:?) \d+/i';
const EXP_DATE_PATTERN = '/(exp date:?) \d{1,2}\/\d{2,4}/';

$rawLogLine = $argv[1];

$rawLogLine = preg_replace(IP_ADDRESS_PATTERN, '***.***.***.***', $rawLogLine);
$rawLogLine = preg_replace(CREDIT_CARD_PATTERN, '$1 **** **** $2', $rawLogLine);
$rawLogLine = preg_replace(CVV_PATTERN, '$1 ***', $rawLogLine);
$rawLogLine = preg_replace(EXP_DATE_PATTERN, '$1 **/****', $rawLogLine);

echo $rawLogLine;
