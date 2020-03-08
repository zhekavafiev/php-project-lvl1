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

        $progression = [];
        $closeIndex = rand(0, $progrssionLenght - 1);

        for ($j = 0; $j < $progrssionLenght; $j++) {
            $progression[$j] = $start + $j * $diff;
        }

        $correctAnswer = $start + $closeIndex * $diff;
        $progression[$closeIndex] = 'X';
        $expression = implode($progression, ' ');
        $gameData[$i] = [$correctAnswer, $expression];
    }
    return $gameData;
}

function runProgression()
{
    $gameData = generateRoundsProgression();
    run($gameData, DESCRIPTION);
}
