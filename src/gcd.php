<?php

namespace Src\Gcd;

use function cli\prompt;
use function Src\Otvet;

function gcd($name)
{
    print_r("В данной игре тебе будет необходимо определить максимальный общий делитель двух чисел.\n");
    print_r("Готов? Поехали!\n");

    $sum = 0;

    for ($i = 1; $i <= 3; $i++) {
        $num1 = rand(1, 30);
        $num2 = rand(1, 20);
        $waitOtvet = 1;
        print_r("{$i}. Какой наибольший общий делитель {$num1} и {$num2} ? \n");//print_r("$num1 \n");
        for ($j = 2; $j <= $num2; $j++) {
            if ($num1 % $j == 0 && $num2 % $j == 0) {
                $waitOtvet = $j;
            }
        }

        $otvet = prompt('');
        $sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
    } \Src\Otvet\close($sum, $name);//print_r($sum);
}

//gcd();
