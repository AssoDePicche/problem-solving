<?php

function bonAppetit(array $bill, int $k, int $b)
{
    unset($bill[$k]);

    $cost = array_sum($bill) / 2;

    return ($b === $cost) ? "Bon Appetit" : abs($b - $cost);
}
