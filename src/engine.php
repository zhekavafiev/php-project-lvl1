<?php

namespace evgvfv\engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function run(array $gameData, $rules)
{
    $arrData = $gameData;
    $sumAnswer = 0;
    $sumRightAnswer = 0;
//=============================== Приветствие ==================================
    line('Добро пожаловать в игры разума!');
    $name = prompt('Как тебя зовут?');
    line('Привет, %s!', $name);
    line('Предлагаю тебе сыграть в игру и проверить свой интеллект');
    line("{$rules}");
//======== начинаем работу с массивом данных предоставленным игрой =============//
    foreach ($arrData as $key => $value) {
        line("Вопрос {$key}: {$value[1]}");
        $expectedAnswer = $value[0];
        $answer = prompt('Твой ответ');
        if ($answer == $expectedAnswer) {
            line("И это правильный ответ, {$name}!");
            $sumAnswer += 1;
            $sumRightAnswer += 1;
        } else {
            $sumAnswer += 1;
            Line("Не верно, {$name}, правильный ответ %s!", $expectedAnswer);
        }
    }
// ======================= конец работы с массивом ============================
// ============= Подсчет процента правильных ответов и прощание ================
    line("Спасибо за игру, $name!");
    $rightPercent = round($sumRightAnswer / $sumAnswer * 100, 0);
    line("Твой процент правильных ответов - $rightPercent% ");

    if ($rightPercent < 30) {
        line("Это очень плохой результат");
    } elseif ($rightPercent >= 30 && $rightPercent < 50) {
        line("Могло быть значительно лучше");
    } elseif ($rightPercent >= 50 && $rightPercent < 80) {
        line("Это неплохой результат");
    } else {
        line("Ты просто гений)");
    }
}
