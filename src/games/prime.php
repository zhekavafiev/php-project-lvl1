<?php

namespace evgvfv\games\prime;

use function evgvfv\engine\run;

use const evgvfv\engine\ROUNDS_COUNT;

const DESCRIPTION = 'В данной игре вам необходимо дать ответ, является ли число простым (варианты ответов - yes/no).';

function isPrime($num)
{
    $sumDeviders = 0;
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $sumDeviders += 1;
        }
    }
    return $sumDeviders === 0;
}

function generateRoundsPrime()
{
    $gameData = [];
    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $num = rand(2, 20);
        $correctAnswerYes = 'yes';
        $correctAnswerNo = 'no';
        $expression = "{$num}";
        $gameData[$i] = (isPrime($num) == true) ? [$correctAnswerYes, $expression] : [$correctAnswerNo, $expression];
    }
    return $gameData;
}

function runPrime()
{
    $gameData = generateRoundsPrime();
    run($gameData, DESCRIPTION);
}
