<?php

namespace Games\Even;

use function Src\Otvet;
use function cli\line;
use function Src\Cli;
use function Src\GamesFunctions;



function evenRun()
{
    $name = \Src\Cli\run();
    line("В данной игре тебе будет необходимо определить четность числа, ничего сложного.");
    line("Варианты ответов должны быть Yes или No, все остальные варианты будут некорректны");
    line("Начинаем!");

    $sum = 0;
    $quontityQuestions = 3;
    for ($i = 1; $i <= $quontityQuestions; $i++) {
        [$otvet, $waitOtvet] = \Src\GamesFunctions\getAnswerEven($i);
        $sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
    }   \Src\Otvet\close($sum, $name);//print_r($sum . "\n");
}
