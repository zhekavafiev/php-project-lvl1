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
