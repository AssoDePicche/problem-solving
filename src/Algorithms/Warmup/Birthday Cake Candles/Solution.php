<?php

function birthdayCakeCandles(array $candleHeights): int
{
    $numberOfCandlesThatAreTallest = 0;

    $tallestCandleHeight = max($candleHeights);

    foreach ($candleHeights as $candleHeight) {
        $candleHeight === $tallestCandleHeight && ++$numberOfCandlesThatAreTallest;
    }

    return $numberOfCandlesThatAreTallest;
}
