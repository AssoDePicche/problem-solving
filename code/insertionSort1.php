<?php

function insertionSort1(int $n, array $a): void
{
    $x = $a[$n - 1];

    for (--$n; $n >= 0; $n--) {
        if ($a[$n] < $x) {
            $a[$n + 1] = $x;

            foreach ($a as $value) {
                printf('%d ', $value);
            }
            echo PHP_EOL;

            if ($a[$n + 1] > $a[$n - 1]) {
                break;
            }
        }

        if ($a[$n] > $x) {
            $a[$n + 1] = $a[$n];

            foreach ($a as $value) {
                printf('%d ', $value);
            }
            echo PHP_EOL;
        }
    }

    if ($x === 1) {
        $a[0] = $x;

        foreach ($a as $value) {
            printf('%d ', $value);
        }
    }
}
