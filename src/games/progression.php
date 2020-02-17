<?php

namespace Evgvfv\Games\Progression;

use function Evgvfv\Engine;

function progression($quontity)
{
    $result = [];
    $rules = 'В данном задании тебе необходимо определить какой число пропущено';
    $result['rules'] = $rules;

    for ($i = 1; $i <= $quontity; $i++) {
        $arr = [];
        $arr[0] = rand(1, 5);
        $step = rand(1, 5);
        $closeIndex = rand(0, 9);

        for ($j = 1; $j <= 10; $j++) {
            $arr[] = $arr[$j - 1] + $step;
        }

        $rightAnswer = $arr[$closeIndex];
        $arr[$closeIndex] = 'X';
        $str = implode($arr, ' ');
        $key = $str;
        $result[$key] = $rightAnswer;
    }
    return $result;
}

function progressionRun()
{
    $quontity = 3;
    $progressionData = progression($quontity);
    \Evgvfv\Engine\run($progressionData);
}
