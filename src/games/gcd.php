<?php

namespace evgvfv\games\gcd;

use function evgvfv\engine\run;
use function evgvfv\engine\rules;
use function evgvfv\engine\questions;

use const evgvfv\engine\ROUNDS;

const RULES = 'В данной игре тебе будет нужно определить наибольший общий делитель двух чисел';

function findGcd($num1, $num2)
{
    for ($i = 1; $i <= $num2; $i++) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            $result = $i;
        }
    }
    return $result;
}

function roundsGcdGenrate()
{
    $expectedAnswer = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $num1 = rand(1, 30);
        $num2 = rand(1, 20);
        $expression = "{$num1} и {$num2}";
        $expectedAnswer[$i] = [findGcd($num1, $num2), $expression];
    } return $expectedAnswer;
}

function gcdRun()
{
    $expectedAnswer = roundsGcdGenrate();
    run($expectedAnswer, RULES);
}
