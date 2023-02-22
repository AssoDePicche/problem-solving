<?php

function birthdayCakeCandles(array $candles): int
{
    $tallest = 0;

    $max = max($candles);

    foreach ($candles as $candle) {
        $candle === $max && $tallest++;
    }

    return $tallest;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$count = intval(trim(fgets(STDIN)));

$temp = rtrim(fgets(STDIN));

$candles = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($candles);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
