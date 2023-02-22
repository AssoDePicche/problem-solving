<?php

function miniMaxSum(array $numbers): void
{
    $min = min($numbers);

    $max = max($numbers);

    $minSum = $maxSum = 0;

    foreach ($numbers as $number) {
        $number < $max && $minSum += $number;

        $number > $min && $maxSum += $number;

        if ($min === $max) {
            $maxSum = array_sum($numbers) - $max;

            $minSum = $maxSum;
        }
    }

    echo $minSum . ' ' . $maxSum;
}

$temp = rtrim(fgets(STDIN));

$array = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($array);
