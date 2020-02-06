<?php

namespace Src\Even;

use function Src\Otvet;
use function cli\prompt;
use function cli\line;

function even($name)
{
    line("В данной игре тебе будет необходимо определить четность числа, ничего сложного.");
    line("Варианты ответов должны быть Yes или No, все остальные варианты будут некорректны");
    line("Начинаем!");

    $sum = 0;

    for ($i = 1; $i <= 3; $i++) {
        print_r("\nВопрос № {$i}.");
        $number = rand(1, 100);
        line("Это четное число %s?", $number);
        //line("Варианты ответов Yes, No");
        $otvet = prompt('');
        //print_r($number);
        if ($number % 2 === 0) {
            $waitOtvet = 'Yes';
        } else {
            $waitOtvet = 'no';
        }
        $sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
    }   \Src\Otvet\close($sum, $name);//print_r($sum . "\n");
}
