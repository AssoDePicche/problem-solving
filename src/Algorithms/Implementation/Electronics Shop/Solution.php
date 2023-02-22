<?php

function getMoneySpent(array $keyboards, array $drives, int $budget): int
{
    $bills = [];

    foreach ($keyboards as $k) {
        foreach ($drives as $drive) {
            $bills[] = ($k + $drive) <= $budget ? $k + $drive : 0;
        }
    }

    $max = max($bills);

    return $max !== 0 ? $max : -1;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$stdin = fopen('php://stdin', 'r');

fscanf($stdin, "%[^\n]", $bnm_temp);

$bnm = explode(' ', $bnm_temp);

$b = intval($bnm[0]);

$n = intval($bnm[1]);

$m = intval($bnm[2]);

fscanf($stdin, "%[^\n]", $keyboards_temp);

$keyboards = array_map('intval', preg_split('/ /', $keyboards_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $drives_temp);

$drives = array_map('intval', preg_split('/ /', $drives_temp, -1, PREG_SPLIT_NO_EMPTY));

$moneySpent = getMoneySpent($keyboards, $drives, $b);

fwrite($fptr, $moneySpent . PHP_EOL);

fclose($stdin);

fclose($fptr);
