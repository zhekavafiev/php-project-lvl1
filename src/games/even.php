<?php

namespace evgvfv\games\even;

use function evgvfv\engine\run;
use function evgvfv\engine\rules;
use function evgvfv\engine\questions;

use const evgvfv\engine\ROUNDS;

const RULES = 'В данной игре тебе будет необходимо определить четность числа (Yes/No)';

function isEven($num)
{
    return ($num % 2 === 0);
}

function roundsEvenGenerate()
{
    $expectedAnswer = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $num = rand(1, 100);
        $expression = "{$num}";
        $expectedAnswer[$i][0] = (isEven($num) === true) ? 'Yes' : 'No';
        $expectedAnswer[$i][1] = $expression;
    }
    return $expectedAnswer;
}

function evenRun()
{
    $expectedAnswer = roundsEvenGenerate();
    run($expectedAnswer, RULES);
}
