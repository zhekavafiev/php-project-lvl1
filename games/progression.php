<?php

namespace Games\Progression;

use function cli\line;
use function Src\GamesFunctions;
use function Src\Otvet;



function progressionRun()
{
    $name = \Src\Cli\run();
    $sum = 0;
    $quontityQuestions = 3;
    line("В данной задаче вам необходимо понять какое их чисел пропущено");
    for ($j = 1; $j <= $quontityQuestions; $j++) {
      [$otvet, $waitOtvet] = \Src\GamesFunctions\getAnswerProgression($j);
      $sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
    } \Src\Otvet\close($sum, $name);//print_r($sum);
}

//progression();
