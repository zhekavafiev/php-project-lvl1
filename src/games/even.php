<?php

namespace evgvfv\games\even;

use function evgvfv\engine\run;

use const evgvfv\engine\ROUNDS_COUNT;

const DESCRIPTION = 'В данной игре тебе будет необходимо определить четность числа (варианты ответов - yes/no).';

function isEven($num)
{
    return ($num % 2 === 0);
}

function generateGameData()
{
    $gameData = [];
    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $num = rand(1, 100);
        $question = "{$num}";
        $correctAnswer = isEven($num) ? 'yes' : 'no';
        $gameData[$i] = [$correctAnswer, $question];
    }
    return $gameData;
}

function runEven()
{
    $gameData = generateGameData();
    run($gameData, DESCRIPTION);
}
