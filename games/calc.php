<?php

namespace Games\Calc;

use function Src\Cli;
use function cli\prompt;
use function cli\line;

function greating()
{
    print_r("В данной игре тебе будет необходимо вычислить резульат простых математических операций\n");
    print_r("И так, поехали\n");
}

function getAnswerCalc() //функция описывающая всю игровую логику
{
    $num1 = rand(1, 15);
    $num2 = rand(1, 25);
    $znak = rand(0, 2);

    switch ($znak) {
        case 0:
            $act = '+';
            $waitOtvet = $num1 + $num2;
            break;
        case 1:
            $act = '-';
            $waitOtvet = $num1 - $num2;
            break;
        case 2:
            $act = '*';
            $waitOtvet = $num1 * $num2;
            break;
    }
    return  [$waitOtvet, $num1, $num2, $act];
}

function calcRun()            //движок в котором будет вызываться игровой процесс
{
    $name = \Src\Cli\run();   //генерируем переменную $name для дальнейшего обращения по имени
    greating();               // генерируем текст приветсвия и опиания игры
    $sum = 0;
    $quontityQuestions = 3;

    for ($i = 1; $i <= $quontityQuestions; $i++) {
        [$waitOtvet, $num1, $num2, $act] = getAnswerCalc();                   //генерация игровых данных, уникальные для каждой игры
        line("{$i}. Каков будет результат операции {$num1}{$act}{$num2}?");   // Генерация вопроса на основании полученных данных, уникально для каждой игры
        $otvet = prompt('');                                                   //получение ответа
        $sum += \Src\Otvet\result($otvet, $waitOtvet, $name);                //подсчет суммы правильных ответов
    } \Src\Otvet\close($sum, $name);                                          //на основании полученной суммы тест прощания
    //print_r($sum);$sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
}

//calrRun();
