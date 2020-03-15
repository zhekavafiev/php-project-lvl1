<?php

namespace evgvfv\games\prime;

use function evgvfv\engine\run;

use const evgvfv\engine\ROUNDS_COUNT;

const DESCRIPTION = 'В данной игре вам необходимо дать ответ, является ли число простым (варианты ответов - yes/no).';

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function generateGameData()
{
    $gameData = [];
    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $num = rand(2, 20);
        $question = "{$num}";
        $correctAnswer = isPrime($num) ? 'yes' : 'no';
        $gameData[$i] = [$correctAnswer, $question];
    }
    return $gameData;
}

function runPrime()
{
    $gameData = generateGameData();
    run($gameData, DESCRIPTION);
}
