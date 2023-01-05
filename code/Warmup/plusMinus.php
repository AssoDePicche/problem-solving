<?php

function format(float $number): string
{
    return number_format($number, 6);
}

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

    echo format($positives / $total) . PHP_EOL;

    echo format($negatives / $total) . PHP_EOL;

    echo format($zeros / $total) . PHP_EOL;
}
