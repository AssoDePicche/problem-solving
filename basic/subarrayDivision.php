<?php

function birthday(array $s, int $d, $m): int
{
    $sum = 0;
    $ways = 0;

    for ($i = 0; $i <= count($s) - $m; $i++) {
        for ($j = 0; $j < $m; $j++) {
            $sum += $s[$i + $j];
        }

        if ($sum === $d) {
            $ways++;
        }

        $sum = 0;
    }

    return $ways;
}
