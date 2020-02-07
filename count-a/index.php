<?php

$wordArg = $argv[1];
$sizeParameterArg = $argv[2];

$word = new Word($wordArg, $sizeParameterArg);

$countAllACharacters = function (int $carry, string $character) {
	if ($character === 'a' || $character === 'A') {
		$carry++;
	}

	return $carry;
};

$characterACount = array_reduce($word->getWordAsArray(), $countAllACharacters, $initialCount = 0);

$countingMessage = chooseMessageByCountedCharacters($word, $characterACount);

echo $countingMessage;

function chooseMessageByCountedCharacters(Word $word, $characterACount): string {
	if ($characterACount === 1) {
		return "Existe 1 letra 'a' na palavra {$word->getNormalizedWord()}.";
	}

	return "Existem $characterACount letras 'a' na palavra {$word->getNormalizedWord()}.";
}

class Word {

	private $wordArg;
	private $sizeParameterArg;

	public function __construct(string $wordArg, int $sizeParameter) {
		$this->wordArg = $wordArg;
		$this->sizeParameterArg = $sizeParameter;
	}

	public function getNormalizedWord(): string {
		if (strlen($this->wordArg) < $this->sizeParameterArg) {
			return str_pad($this->wordArg, $this->sizeParameterArg, $this->wordArg);
		}

		return substr($this->wordArg, 0, $this->sizeParameterArg);
	}

	public function getWordAsArray(): array {
		return str_split($this->getNormalizedWord());
	}
}
