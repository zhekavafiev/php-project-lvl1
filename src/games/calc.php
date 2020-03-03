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
        $sign = $signs[array_rand($signs)];
        $expression = "{$num1} {$sign} {$num2} = ";
        switch ($sign) {
            case '+':
                $correctAnswer = $num1 + $num2;
                break;
            case '-':
                $correctAnswer = $num1 - $num2;
                break;
            case '*':
                $correctAnswer = $num1 * $num2;
                break;
        }
        $gameData[$i] = [$correctAnswer, $expression];
    }
    return $gameData;
}

function runCalc()
{
    $gameData = generateRoundsCalc();
    run($gameData, DESCRIPTION);
}
