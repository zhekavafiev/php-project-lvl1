<?php

namespace Src\Logika;

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
        if ($number % 2 === 0 && $otvet === 'Yes') {
            print_r('Все верно' . "\n");
            $sum += 1;
        } elseif ($number % 2 != 0 && $otvet === 'No') {
            print_r('Все верно' . "\n");
            $sum += 1;
        } else {
            print_r('Вот тут ты не прав' . "\n");
        }
    }
    line('');
    if ($sum == 2) {
        line("Неплохой результат");
    } elseif ($sum == 3) {
        line("Ты просто гений");
    } else {
        line("Так себе результатик");
    }
}

//game();
