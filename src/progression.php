<?php

namespace Src\Progression;

use function cli\line;
use function cli\prompt;

function progression($name)
{
    $sum = 0;
    line("В данной задаче вам необходимо понять какое их чисел пропущено");
    for ($j = 1; $j <= 3; $j++){

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
        line("{$j}. %s", $str);
        $otvet = prompt("Ваш вариант");
        $sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
      } \Src\Otvet\close($sum, $name);//print_r($sum);
}

//progression();
