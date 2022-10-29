<?php

function getMoneySpent(array $keyboards, array $drives, int $budget)
{
    $bills = [];

    foreach ($keyboards as $k) {
        foreach ($drives as $drive) {
            $bills[] = (($k + $drive) <= $budget) ? $k + $drive : 0;
        }
    }

    $max = max($bills);

    return $max !== 0 ? $max : -1;
}
