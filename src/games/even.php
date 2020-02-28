<?php

namespace evgvfv\games\even;

use function evgvfv\engine\run;

use const evgvfv\engine\ROUNDS_COUNT;

const DESCRIPTION = 'В данной игре тебе будет необходимо определить четность числа (арианты ответов - yes/no)';

function isEven($num)
{
    return ($num % 2 === 0);
}

function generateRoundsEven()
{
    $gameData = [];
    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $num = rand(1, 100);
        $expression = "{$num}";
        $gameData[$i][0] = (isEven($num) === true) ? 'yes' : 'no';
        $gameData[$i][1] = $expression;
    }
    return $gameData;
}

function runEven()
{
    $gameData = generateRoundsEven();
    run($gameData, DESCRIPTION);
}
