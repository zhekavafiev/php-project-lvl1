<?php

namespace Src\Otvet;

use function cli\line;

function result($otvet, $waitOtvet)
{
    if ($otvet === $waitOtvet) {
      line("И это прааавильный ответ!");
      return 1;
    } else {
      Line("Не верно, правильный ответ %s", $waitOtvet);
    }
    //print_r($sum);
    //return $sum;
}
