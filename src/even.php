<?php

namespace Src\Even;

use function Src\Otvet;
use function cli\prompt;
use function cli\line;

function game()
{
    line("Варианты ответов должны быть Yes или No, все остальные варианты будут некорректны");
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
        $sum += \Src\Otvet\result($otvet, $waitOtvet);
    } //print_r($sum . "\n");
}
    /*line('');
    if ($sum == 2) {
        line("Неплохой результат");
    } elseif ($sum == 3) {
        line("Ты просто гений");
    } else {
        line("Так себе результатик");
    }
}*/

//game();
