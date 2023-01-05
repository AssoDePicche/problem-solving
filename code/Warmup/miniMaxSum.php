<?php

function miniMaxSum(array $numbers): void
{
    $min = min($numbers);

    $max = max($numbers);

    $minSum = 0;

    $maxSum = 0;

    foreach ($numbers as $number) {
        $number < $max && $minSum += $number;

        $number > $min && $maxSum += $number;

        if ($min === $max) {
            $maxSum = array_sum($numbers) - $max;

            $minSum = $maxSum;
        }
    }

    printf("%d %d", $minSum, $maxSum);
}
