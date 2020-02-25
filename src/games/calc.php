<?php

namespace evgvfv\games\calc;

use function evgvfv\engine\run;
use function evgvfv\engine\rules;
use function evgvfv\engine\questions;

use const evgvfv\engine\ROUNDS;

const RULES = 'В данном задании тебе необходимо вычислить значение простых математических выражений.';

function roundsCalcGenerate()
{
    $expectedAnswer = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $num1 = rand(1, 15);
        $num2 = rand(1, 25);
        $arrSign = ['+', '-', '*'];
        $sign = rand(0, count($arrSign) - 1);
        $expression = "{$num1} {$arrSign[$sign]} {$num2}";

        switch ($sign) {
            case 0:
                $expectedAnswer[$i] = [$num1 + $num2, $expression];
                break;
            case 1:
                $expectedAnswer[$i] = [$num1 - $num2, $expression];
                break;
            case 2:
                $expectedAnswer[$i] = [$num1 * $num2, $expression];
                break;
        }
    }
    return $expectedAnswer;
}

function calcRun()
{
    $expectedAnswer = roundsCalcGenerate();
    run($expectedAnswer, RULES);
}
