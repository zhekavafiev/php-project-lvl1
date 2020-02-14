<?php

namespace Games\Calc;

use function Src\Cli;

function greating()
{
    print_r("В данной игре тебе будет необходимо вычислить резульат простых математических операций\n");
    print_r("И так, поехали\n");
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

function calcRun()
{
    $name = \Src\Cli\run();
    greating();
    $sum = 0;
    $quontityQuestions = 3;

    for ($i = 1; $i <= $quontityQuestions; $i++) {
        [$otvet, $waitOtvet] = getAnswerCalc($i);
        $sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
    } \Src\Otvet\close($sum, $name);
    //print_r($sum);$sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
}
