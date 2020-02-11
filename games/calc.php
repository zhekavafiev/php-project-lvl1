<?php

namespace Games\Calc;

use function Src\GanesFunctions;
use function Src\Cli;

function calcRun()
{
    $name = \Src\Cli\run();

    print_r("В данной игре тебе будет необходимо вычислить резульат простых математических операций\n");
    print_r("И так, поехали\n");

    $sum = 0;
    $quontityQuestions = 3;

    for ($i = 1; $i <= $quontityQuestions; $i++) {
        [$otvet, $waitOtvet] = \Src\GamesFunctions\getAnswerCalc($i);
        $sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
    } \Src\Otvet\close($sum, $name);
    //print_r($sum);$sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
}
