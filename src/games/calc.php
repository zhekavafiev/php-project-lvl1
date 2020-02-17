<?php

namespace Evgvfv\Games\Calc;

use function Evgvfv\Engine;

function calc($quontity)
{
    $rules = 'В данном задании тебе необходимо вычислить значение простых математических выражений.';
    $result['rules'] = $rules;
    for ($i = 1; $i <= $quontity; $i++) {
        $num1 = rand(1, 15);
        $num2 = rand(1, 25);
        $znak = rand(0, 2);

        switch ($znak) {
            case 0:
                $key = "{$i}. Каков будет результат операции {$num1} + {$num2}";
                $result[$key] = $num1 + $num2;
                break;
            case 1:
                $key = "{$i}. Каков будет результат операции {$num1} - {$num2}";
                $result[$key] = $num1 - $num2;
                break;
            case 2:
                $key = "{$i}. Каков будет результат операции {$num1} * {$num2}";
                $result[$key] = $num1 * $num2;
                break;
        }
    }
    return $result;
}

function calcRun()
{
    $quontity = 3;
    $calcData = calc($quontity);
    \Evgvfv\Engine\run($calcData);
}
