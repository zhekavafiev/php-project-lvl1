<?php

namespace evgvfv\games\prime;

use function evgvfv\engine\run;
use function evgvfv\engine\rules;
use function evgvfv\engine\questions;

use const evgvfv\engine\ROUNDS;

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

function prime()
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
    $expectedAnswer = [];
    $expressionData = [];
    foreach (prime() as $value) {
        $expectedAnswer[] = $value[0];
        $expressionData[] = $value[1];
    }
    $question = questions($expressionData, 'prime');
    $rules = rules('prime');
    run($expectedAnswer, $question, $rules);
}
