<?php

namespace evgvfv\games\prime;

use function evgvfv\engine\run;
use function evgvfv\engine\rules;
use function evgvfv\engine\questions;

use const evgvfv\engine\ROUNDS;

const RULES = 'В данной игре вам необходимо дать ответ, является ли число простым.';

function isPrime($num)
{
    $sumDeviders = 0;
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $sumDeviders += 1;
        }
    }
    return $sumDeviders === 0;
}

function roundsPrimeGenerate()
{
    $expectedAnswer = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $num = rand(2, 20);
        $expression = "{$num}";
        $expectedAnswer[$i][0] = (isPrime($num) == true) ? 'Yes' : 'No';
        $expectedAnswer[$i][1] = $expression;
    }
    return $expectedAnswer;
}

function primeRun()
{
    $expectedAnswer = roundsPrimeGenerate();
    run($expectedAnswer, RULES);
}
