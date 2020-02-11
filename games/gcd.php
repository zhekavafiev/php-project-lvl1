<?php

namespace Games\Gcd;

use function Src\Cli;
use function Src\Otvet;
use function Src\GamesFunctions;

function gcdRun()
{
    $name = \Src\Cli\run();
    print_r("В данной игре тебе будет необходимо определить максимальный общий делитель двух чисел.\n");
    print_r("Готов? Поехали!\n");
    $sum = 0;
    $quontityQuestions = 3;

    for ($i = 1; $i <= $quontityQuestions; $i++) {
        [$otvet, $waitOtvet] = \Src\GamesFunctions\getAnswerGcd($i);
        $sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
      } \Src\Otvet\close($sum, $name);//print_r($sum);
}

//gcdRun();
