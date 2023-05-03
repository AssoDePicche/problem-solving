<?php

function plusMinus(array $numbers): void
{
    $positives = $negatives = $zeros = 0;

    $total = count($numbers);

    $ratioOf = fn (int $n) => number_format(($n / $total), 6) . PHP_EOL;

    foreach ($numbers as $number) {
        $number < 0 && $negatives++;

        $number > 0 && $positives++;

        $number === 0 && $zeros++;
    }

    echo $ratioOf($positives);

    echo $ratioOf($negatives);

    echo $ratioOf($zeros);
}

$n = intval(trim(fgets(STDIN)));

$temp = rtrim(fgets(STDIN));

$array = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($array);
