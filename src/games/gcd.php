<?php

namespace evgvfv\games\gcd;

use function evgvfv\engine\run;
use function evgvfv\engine\rules;
use function evgvfv\engine\questions;

use const evgvfv\engine\ROUNDS;

function findGcd($num1, $num2)
{
    for ($i = 1; $i <= $num2; $i++) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            $result = $i;
        }
    }
    return $result;
}

function gcd()
{
    $expectedAnswer = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $num1 = rand(1, 30);
        $num2 = rand(1, 20);
        $expression = "{$num1} и {$num2}";
        $expectedAnswer[$i][0] = [findGcd($num1, $num2), $expression];
    } return $expectedAnswer;
}

function gcdRun()
{
    $expectedAnswer = [];
    $expressionData = [];
    foreach (gcd() as $value) {
        $expectedAnswer[] = $value[0];
        $expressionData[] = $value[1];
    }
    $rules = rules('gcd');
    $question = questions($expressionData, 'gcd');
    run($expectedAnswer, $question, $rules);
}
