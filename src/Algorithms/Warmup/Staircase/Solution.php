<?php

function staircase(int $numberOfStairs): void
{
    $space = ' ';

    $numberSign = '#';

    for ($currentStair = 1; $currentStair <= $numberOfStairs; ++$currentStair) {
        echo str_repeat($space, $numberOfStairs - $currentStair);

        echo str_repeat($numberSign, $currentStair) . PHP_EOL;
    }
}
