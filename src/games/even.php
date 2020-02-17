<?php

namespace Evgvfv\Games\Even;

use function Evgvfv\Engine;

function even($quontity)
{
    $rules = "В данной игре тебе будет необходимо определить четность числа (Yes/no)";
    $result['rules'] = $rules;

    for ($i = 1; $i <= $quontity; $i++) {
        $num = rand(1, 100);
        $key = "{$i}. {$num} - четное число?";
        if ($num % 2 === 0) {
            $result[$key] = 'Yes';
        } else {
            $result[$key] = 'No';
        }
    }
    return $result;
}

function evenRun()
{
    $quontity = 3;
    $evenData = even($quontity);
    \Evgvfv\Engine\run($evenData);
}
