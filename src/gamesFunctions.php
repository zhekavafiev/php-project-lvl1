<?php

namespace Src\GamesFunctions;

use function cli\prompt;
use function Src\Otvet;

function getAnswerGcd($question)
{   $num1 = rand(1, 30);
    $num2 = rand(1, 20);
    $waitOtvet = 1;
    print_r("{$question}. Какой наибольший общий делитель {$num1} и {$num2} ? \n");//print_r("$num1 \n");
    for ($j = 2; $j <= $num2; $j++) {
        if ($num1 % $j == 0 && $num2 % $j == 0) {
            $waitOtvet = $j;
        }
    } $otvet = prompt('');
    return [$otvet, $waitOtvet];
}



//gcd();
