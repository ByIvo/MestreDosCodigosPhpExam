<?php

$phrase = $argv[1];
$phraseWithoutSpaces = str_replace(' ', '', $phrase);
$invertPhrase = strrev($phraseWithoutSpaces);

if ($phraseWithoutSpaces === $invertPhrase) {
	echo $phrase;
}
