<?php

namespace Games\Prime;

use function cli\line;
use function cli\prompt;
use function Src\Otvet;

function primeRun()
{
    $name = \Src\Cli\run();
    line("В данной игре вам необходимо дать ответ, является ли число простым.");
    line("Прстое число - делится только на 1 и само на себя.");
    line("И так начнем!");
    $sum = 0;
    $quontityQuestions = 3;

    for ($j = 1; $j <= $quontityQuestions; $j++) {
          [$otvet, $waitOtvet] = \Src\GamesFunctions\getAnswerPrime($j);
          $sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
    } \Src\Otvet\close($sum, $name);//print_r($sum);
}

//prime();
