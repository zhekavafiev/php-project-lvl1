<?php

namespace evgvfv\games\progression;

use function evgvfv\engine\run;

use const evgvfv\engine\ROUNDS_COUNT;

const DESCRIPTION = 'В данном задании тебе необходимо определить какой число пропущено';

function generateRoundsProgression()
{
    $gameData = [];

    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $start = rand(1, 5);
        $diff = rand(1, 5);
        $progrssionLenght = 10;

        $numbers = [];
        $closeIndex = rand(0, $progrssionLenght - 1);

        for ($j = 0; $j < $progrssionLenght; $j++) {
            $numbers[$j] = $start + $j * $diff;
        }

        $rightAnswer = $start + $closeIndex * $diff;
        $numbers[$closeIndex] = 'X';
        $expression = implode($numbers, ' ');
        $gameData[$i] = [$rightAnswer, $expression];
    }
    return $gameData;
}

function runProgression()
{
    $gameData = generateRoundsProgression();
    run($gameData, DESCRIPTION);
}
