<?php

function staircase(int $n): void
{
    $pounds = '';

    for ($i = 1; $i <= $n; $i++) {
        $spaces = '';

        $pounds .= '#';

        for ($j = 0; $j < $n - $i; $j++) {
            $spaces .= ' ';
        }

        echo $spaces . $pounds . PHP_EOL;
    }
}
