<?php

namespace evgvfv\engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function run(array $gameData, $description)
{
    //$arrData = $gameData;
    $answersCount = 0;
    $correctAnswersCount = 0;
//=============================== Приветствие ==================================
    line('Добро пожаловать в игры разума!');
    $name = prompt('Как тебя зовут?');
    line('Привет, %s!', $name);
    line('Предлагаю тебе сыграть в игру и проверить свой интеллект');
    line("{$description}");
//======== начинаем работу с массивом данных предоставленным игрой =============//
    foreach ($gameData as $key => [$correctAnswer, $expression]) {
        line("Вопрос {$key}: {$expression}");
        $expectedAnswer = $correctAnswer;
        $answer = prompt('Твой ответ');
        if ($answer == $expectedAnswer) {
            line("И это правильный ответ, {$name}!");
            $answersCount += 1;
            $correctAnswersCount += 1;
        } else {
            $answersCount += 1;
            Line("Не верно, {$name}, правильный ответ %s!", $expectedAnswer);
        }
    }
// ======================= конец работы с массивом ============================
// ============= Подсчет процента правильных ответов и прощание ================
    line("Спасибо за игру, $name!");
    $percentOfCorrectAnswer = round($correctAnswersCount / $answersCount * 100, 0);
    line("Твой процент правильных ответов - $percentOfCorrectAnswer% ");

    if ($percentOfCorrectAnswer < 30) {
        line("Это очень плохой результат");
    } elseif ($percentOfCorrectAnswer >= 30 && $percentOfCorrectAnswer < 50) {
        line("Могло быть значительно лучше");
    } elseif ($percentOfCorrectAnswer >= 50 && $percentOfCorrectAnswer < 80) {
        line("Это неплохой результат");
    } else {
        line("Ты просто гений)");
    }
}
