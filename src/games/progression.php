<?php

namespace evgvfv\games\progression;

use function evgvfv\engine\run;

use const evgvfv\engine\ROUNDS_COUNT;

const DESCRIPTION = 'В данном задании тебе необходимо определить какой число пропущено.';

function generateGameData()
{
    $gameData = [];

    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $start = rand(1, 5);
        $diff = rand(1, 5);
        $progressionLenght = 10;

        $progression = [];
        $hiddenElemenrIndex = rand(0, $progressionLenght - 1);

        for ($j = 0; $j < $progressionLenght; $j++) {
            $progression[$j] = $start + $j * $diff;
        }

        $correctAnswer = $start + $hiddenElemenrIndex * $diff;
        $progression[$hiddenElemenrIndex] = 'X';
        $question = implode(' ', $progression);
        $gameData[$i] = [$correctAnswer, $question];
    }
    return $gameData;
}

function runProgression()
{
    $gameData = generateGameData();
    run($gameData, DESCRIPTION);
}
