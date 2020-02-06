<?php

namespace Src\Prime;

use function cli\line;
use function cli\prompt;
use function Src\Otvet;

function prime($name)
{
      line("В данной игре вам необходимо дать ответ, является ли число простым.");
      line("Прстое число - делится только на 1 и само на себя.");
      line("И так начнем!");
      $sum = 0;
  //$name = '';
      for ($j = 1; $j <= 3; $j++) {
          $result = [];
          $num = rand (2, 100);
          $samle = [1, $num];
  //print_r($num);
          line("{$j}. {$num} является простым?");
          $otvet = prompt('Ваш ответ');

          for ($i = 1; $i <= $num; $i++) {
                if ($num % $i === 0) {
                $result[] = $i;
                }
            }
  //print_r($result);
          $result === $samle ? $waitOtvet = 'Yes' : $waitOtvet = 'No';
   //print_r($waitOtvet);
          $sum += \Src\Otvet\result($otvet, $waitOtvet, $name);
      } \Src\Otvet\close($sum, $name);//print_r($sum);
}

//prime();
