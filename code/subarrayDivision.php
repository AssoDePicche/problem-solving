<?php

function birthday(array $s, int $d, $m): int
{
    $sum = 0;
    $ways = 0;
    $length = count($s);

    for ($i = 0; $i <= $length - $m; $i++) {
        for ($j = 0; $j < $m; $j++) {
            $sum += $s[$i + $j];
        }

        $sum === $d && $ways++;
        $sum = 0;
    }

    return $ways;
}
