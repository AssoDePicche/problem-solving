<?php

function staircase(int $n): void
{
    $pounds = '';

    for ($i = 1; $i <= $n; $i++) {
        $spaces = '';

        $pounds .= '#';

        $spaces .= str_repeat(' ', $n - $i);

        echo $spaces . $pounds . PHP_EOL;
    }
}

$n = intval(trim(fgets(STDIN)));

staircase($n);
