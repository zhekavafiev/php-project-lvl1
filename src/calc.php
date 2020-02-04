<?php

namespace Src\Calc;

use function cli\prompt;
use function Src\Otvet;

function calc($name)
{
    print_r("В данной игре тебе будет необходимо вычислить резульат простыхматематических операций\n");
    print_r("И так, поехали...\n");
    $sum = 0;
    $arrZnak = ['+', '-', '*'];
    for ($i = 1; $i <= 3; $i++) {
        $num1 = rand(1, 15);
        $num2 = rand(1, 25);
        $znak = $arrZnak[rand(0, 2)];

        if ($znak === '+') {
            print_r("{$i}. Каков будет результат операции {$num1}{$znak}{$num2}?");
            $waitOtvet = $num1 + $num2;
            $otvet = prompt('');
        } elseif ($znak === '-') {
            print_r("{$i}. Каков будет результат операции {$num1}{$znak}{$num2}?");
            $waitOtvet = $num1 - $num2;
            $otvet = prompt('');
        } elseif ($znak === '*') {
            print_r("{$i}. Каков будет результат операции {$num1}{$znak}{$num2}?");
            $waitOtvet = $num1 * $num2;
            $otvet = prompt('');
        } $sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
    } //print_r($sum);
}

 //calc();
