<?php

namespace Evgvfv\Games\Prime;

use function Evgvfv\Engine;

function prime($quontity)
{
    $rules = 'В данной игре вам необходимо дать ответ, является ли число простым.';
    $result['rules'] = $rules;

    for ($i = 1; $i <= $quontity; $i++) {
        $comparetivArr = [];
        $num = rand(2, 20);
        $sample = [1, $num];
        $key = "{$i}. {$num} является простым?";

        for ($j = 1; $j <= $num; $j++) {
            if ($num % $j === 0) {
                $comparetivArr[] = $j;
            }
        }

        if ($comparetivArr == $sample) {
            $result[$key] = 'Yes';
        } else {
            $result[$key] = 'No';
        }
    }
    return $result;
}

function primeRun()
{
    $quontity = 3;
    $primeData = prime($quontity);
    \Evgvfv\Engine\run($primeData);
}
