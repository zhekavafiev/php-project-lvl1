<?php

namespace Src\Cli;

use function cli\line;
use function cli\prompt;

function run()
{
    line('Добро пожаловать в игры разума!');
    $name = prompt('Как тебя зовут?');
    line('Привет, %s!', $name);
    line('Предлагаю тебе сыграть в игру и проверить свой интеллект');
    //line('');
}

//run();
