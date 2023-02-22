<?php

function bonAppetit(array $bill, int $k, int $b): void
{
    unset($bill[$k]);

    $cost = array_sum($bill) / 2;

    echo ($b === $cost) ? 'Bon Appetit' : abs($b - $cost);
}

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$k = intval($first_multiple_input[1]);

$bill_temp = rtrim(fgets(STDIN));

$bill = array_map('intval', preg_split('/ /', $bill_temp, -1, PREG_SPLIT_NO_EMPTY));

$b = intval(trim(fgets(STDIN)));

bonAppetit($bill, $k, $b);
