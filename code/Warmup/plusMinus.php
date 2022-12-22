<?php

function plusMinus(array $numbers): void
{
    $positives = 0;

    $negatives = 0;

    $zeros = 0;

    $total = count($numbers);

    foreach ($numbers as $number) {
        $number < 0 && $negatives++;

        $number > 0 && $positives++;

        $number === 0 && $zeros++;
    }

    echo number_format($positives / $total, 6) . PHP_EOL;

    echo number_format($negatives / $total, 6) . PHP_EOL;

    echo number_format($zeros / $total, 6) . PHP_EOL;
}
