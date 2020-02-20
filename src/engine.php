<?php

namespace evgvfv\engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function questions($expressionData, $gameType)
{
    for ($i = 0; $i < ROUNDS; $i++) {
        switch ($gameType) {
            case 'calc':
                $question[] = "{$expressionData[$i]} - какой будет результат операции?";
                break;
            case 'even':
                $question[] = "{$expressionData[$i]} - четное число?";
                break;
            case "gcd":
                $question[] = "{$expressionData[$i]} - какой наибольший общий делитель ?";
                break;
            case 'prime':
                $question[] = "{$expressionData[$i]} - является простым?";
                break;
            case 'progression':
                $question[] = "{$expressionData[$i]}";
                break;
        }
    }
    return $question;
}

function rules($gameType)
{
    switch ($gameType) {
        case 'calc':
            $rules = 'В данном задании тебе необходимо вычислить значение простых математических выражений.';
            break;
        case 'even':
            $rules = "В данной игре тебе будет необходимо определить четность числа (Yes/no)";
            break;
        case "gcd":
            $rules = "В данной игре тебе будет нужно определить наибольший общий делитель двух чисел";
            break;
        case 'prime':
            $rules = 'В данной игре вам необходимо дать ответ, является ли число простым.';
            break;
        case 'progression':
            $rules = 'В данном задании тебе необходимо определить какой число пропущено';
            break;
    }
    return $rules;
}

function run(array $gameData, $question, $rules)
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
    for ($i = 1; $i <= ROUNDS; $i++) {
        line("{$i}. {$question[$i-1]}");
        $expectedAnswer = $arrData[$i - 1];
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
