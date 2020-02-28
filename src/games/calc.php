<?php

namespace evgvfv\games\calc;

use function evgvfv\engine\run;

use const evgvfv\engine\ROUNDS_COUNT;

const DESCRIPTION = 'В данном задании тебе необходимо вычислить значение простых математических выражений.';

function generateRoundsCalc()
{
    $gameData = [];
    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $num1 = rand(1, 15);
        $num2 = rand(1, 25);
        $signs = ['+', '-', '*'];
        $sign = $signs[rand(0, count($signs) - 1)];
        $expression = "{$num1} {$sign} {$num2} = ";
        switch ($sign) {
            case '+':
                $rightAnswer = $num1 + $num2;
                break;
            case '-':
                $rightAnswer = $num1 - $num2;
                break;
            case '*':
                $rightAnswer = $num1 * $num2;
                break;
        }
        $gameData[$i] = [$rightAnswer, $expression];
    }
    return $gameData;
}

function runCalc()
{
    $gameData = generateRoundsCalc();
    run($gameData, DESCRIPTION);
}
