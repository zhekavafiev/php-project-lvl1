<?php

namespace Src\Progression;

use function cli\line;
use function cli\prompt;

function progression($name)
{
    $arr = [];
    $arr[0] = rand(1, 5);
    $step = rand(1, 5);
    $closeIndex = rand(0, 9);

    for ($i = 1; $i <= 10; $i++) {
        $arr[] = $arr[$i - 1] + $step;
    }

    $waitOtvet = $arr[$closeIndex];
    $arr[$closeIndex] = 'X';
    $str = implode($arr, ' ');

    line("В данной задаче вам необходимо понять какое их чисел пропущено");
    line("%s", $str);
    $otvet = prompt("Ваш вариант");
    \Src\Otvet\result($otvet, $waitOtvet, $name);
}

//progression();
