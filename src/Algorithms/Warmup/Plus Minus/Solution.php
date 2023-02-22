<?php

function plusMinus(array $numbers): void
{
    $positives = $negatives = $zeros = 0;

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

$n = intval(trim(fgets(STDIN)));

$temp = rtrim(fgets(STDIN));

$array = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($array);
