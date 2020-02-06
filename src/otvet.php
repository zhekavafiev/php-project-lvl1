<?php

namespace Src\Otvet;

use function Src\Cli;
use function cli\line;

function result($otvet, $waitOtvet, $name)
{
    //print_r($name);
    if ($otvet == $waitOtvet) {
        line("И это прааавильный ответ, {$name}!");
        return 1;
    } else {
        Line("Не верно, {$name}, правильный ответ %s!", $waitOtvet);
    }
    //print_r($sum);
    //return $sum;
}

function close($sum, $name)
{
    line("Спасибо за игру, $name!");
    line("Твоe количество правильных ответов - $sum ");
    if ($sum === 0) {
        line("Это очень плохой результат");
    } elseif ($sum === 1) {
        line("Могло быть значительно лучше");
    } elseif ($sum === 2) {
        line("Это неплохой результат");
    } else {
        line("Ты просто гений)");
    }
}
