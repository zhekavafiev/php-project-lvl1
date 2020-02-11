<?php

namespace Src\GamesFunctions;

use function cli\prompt;
//use function Src\Otvet;

function getAnswerGcd($question)
{
    $num1 = rand(1, 30);
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

function getAnswerCalc($question)
{
  $num1 = rand(1, 15);
  $num2 = rand(1, 25);
  $znak = rand(0, 2);

  switch ($znak) {
    case 0:
        print_r("{$question}. Каков будет результат операции {$num1}+{$num2}?");
        $waitOtvet = $num1 + $num2;
        $otvet = prompt('');
        break;
    case 1:
        print_r("{$question}. Каков будет результат операции {$num1}-{$num2}?");
        $waitOtvet = $num1 - $num2;
        $otvet = prompt('');
        break;
    case 2:
        print_r("{$question}. Каков будет результат операции {$num1}*{$num2}?");
        $waitOtvet = $num1 * $num2;
        $otvet = prompt('');
        break;
    } return [$otvet, $waitOtvet];
}
