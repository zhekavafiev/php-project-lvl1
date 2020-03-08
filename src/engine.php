<?php

namespace evgvfv\engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function run(array $gameData, $description)
{
    $answersCount = 0;
    $correctAnswersCount = 0;

    line('Добро пожаловать в игры разума!');
    $name = prompt('Как тебя зовут?');
    line('Привет, %s!', $name);
    line('Предлагаю тебе сыграть в игру и проверить свой интеллект');
    line("{$description}");

    foreach ($gameData as $questionNumber => [$correctAnswer, $expression]) {
        line("Вопрос {$questionNumber}: {$expression}");
        $expectedAnswer = $correctAnswer;
        $answer = prompt('Твой ответ');
        if ($answer == $expectedAnswer) {
            line("И это правильный ответ, {$name}!");
            $answersCount += 1;
            $correctAnswersCount += 1;
        } else {
            $answersCount += 1;
            line("Не верно, {$name}, правильный ответ %s!", $expectedAnswer);
        }
    }

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
