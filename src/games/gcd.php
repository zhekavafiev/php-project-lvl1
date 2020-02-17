<?php

namespace Evgvfv\Games\Gcd;

use function Evgvfv\Engine;

function gcd($quontity)
{
    $rules = "В данной игре тебе будет нужно определить наибольший общий делитель двух чисел";
    $result['rules'] = $rules;

    for ($i = 1; $i <= $quontity; $i++) {
        $num1 = rand(1, 30);
        $num2 = rand(1, 20);
        $key = "{$i}. Какой наибольший общий делитель {$num1} и {$num2}?";
        for ($j = 1; $j <= $num2; $j++) {
            if ($num1 % $j == 0 && $num2 % $j == 0) {
                $result[$key] = $j;
            }
        }
    } return $result;
}

function gcdRun()
{
    $quontity = 3;
    $gcdData = gcd($quontity);
    \Evgvfv\Engine\run($gcdData);
}

//gcdRun();
