<?php

function maxMoneySpent(array $keyboards, array $drives, int $budget): int
{
    $maxMoneySpent = -1;

    foreach ($keyboards as $keyboard) {
        foreach ($drives as $drive) {
            $totalCost = ($keyboard + $drive);

            if ($totalCost <= $budget) {
                $maxMoneySpent = max($maxMoneySpent, $totalCost);
            }
        }
    }

    return $maxMoneySpent;
}
