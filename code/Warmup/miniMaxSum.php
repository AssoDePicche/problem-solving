<?php

function miniMaxSum(array $numbers): void
{
    $min = min($numbers);

    $max = max($numbers);

    $minSum = 0;

    $maxSum = 0;

    foreach ($numbers as $number) {
        if ($min === $max) {
            $maxSum = array_sum($numbers) - $max;

            $minSum = $maxSum;
        }

        if ($number < $max) {
            $minSum += $number;
        }

        if ($number > $min) {
            $maxSum += $number;
        }
    }

    echo $minSum . ' ' . $maxSum;
}
