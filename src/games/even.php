<?php

namespace evgvfv\games\even;

use function evgvfv\engine\run;
use function evgvfv\engine\rules;
use function evgvfv\engine\questions;

use const evgvfv\engine\ROUNDS;

function even()
{
    $expectedAnswer = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $num = rand(1, 100);
        $expression = "{$num}";
        $expectedAnswer[$i][0] = ($num % 2 === 0) ? 'Yes' : 'No';
        $expectedAnswer[$i][1] = $expression;
    }
    return $expectedAnswer;
}

function evenRun()
{
    $expectedAnswer = [];
    $expressionData = [];
    foreach (even() as $value) {
        $expectedAnswer[] = $value[0];
        $expressionData[] = $value[1];
    }
    $rules = rules('even');
    $question = questions($expressionData, 'even');
    run($expectedAnswer, $question, $rules);
}
