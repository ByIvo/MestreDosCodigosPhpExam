<?php

$number = $argv[1];

$V5 = sqrt(5);
$Phi = (1 + $V5) / 2;
$iPhi = -1 / $Phi;

echo round((pow($Phi, $number) - pow($iPhi, $number)) / $V5);
