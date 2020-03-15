<?php

namespace evgvfv\games\gcd;

use function evgvfv\engine\run;

use const evgvfv\engine\ROUNDS_COUNT;

const DESCRIPTION = 'В данной игре тебе будет нужно определить наибольший общий делитель двух чисел.';

function findGcd($num1, $num2)
{
    for ($i = 1; $i <= $num2; $i++) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            $result = $i;
        }
    }
    return $result;
}

function generateGameData()
{
    $gameData = [];
    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $num1 = rand(1, 30);
        $num2 = rand(1, 20);
        $question = "{$num1} и {$num2}";
        $gameData[$i] = [findGcd($num1, $num2), $question];
    } return $gameData;
}

function runGcd()
{
    $gameData = generateGameData();
    run($gameData, DESCRIPTION);
}
