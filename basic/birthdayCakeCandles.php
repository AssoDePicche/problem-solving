<?php

function birthdayCakeCandles(array $candles): int
{
    $tallest = 0;
    $max = max($candles);

    foreach ($candles as $candle) {
        if ($candle === $max) {
            $tallest++;
        }
    }


    return $tallest;
}
