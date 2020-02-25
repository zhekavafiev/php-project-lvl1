<?php

namespace evgvfv\games\progression;

use function evgvfv\engine\run;
use function evgvfv\engine\rules;
use function evgvfv\engine\questions;

use const evgvfv\engine\ROUNDS;

const RULES = 'В данном задании тебе необходимо определить какой число пропущено';

function roundsProgressionGenerate()
{
    $expectedAnswer = [];

    for ($i = 1; $i <= ROUNDS; $i++) {
        $start = rand(1, 5);
        $diff = rand(1, 5);
        $progrssionLenght = 10;

        $arr = [];
        $arr[0] = $start;
        $closeIndex = rand(0, $progrssionLenght - 1);

        for ($j = 1; $j < $progrssionLenght; $j++) {
            $arr[$j] = $start + $j * $diff;
        }

        $rightAnswer = $start + $closeIndex * $diff;
        $arr[$closeIndex] = 'X';
        $str = implode($arr, ' ');
        $expression = $str;
        $expectedAnswer[$i] = [$rightAnswer, $expression];
    }
    return $expectedAnswer;
}

function progressionRun()
{
    $expectedAnswer = roundsProgressionGenerate();
    run($expectedAnswer, RULES);
}
