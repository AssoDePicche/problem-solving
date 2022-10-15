<?php

function sockMerchant(int $n, array $array): int
{
    $pairs = [];
    $result = 0;

    for ($i = 0; $i < $n; $i++) {
        $pairs[$array[$i]] = 0;
    }

    for ($i = 0; $i < $n; $i++) {
        if ($array[$i]) {
            $pairs[$array[$i]]++;
        }
    }

    foreach ($pairs as $pair) {
        if ($pair % 2 !== 0) {
            if ($pair - 1 % 2 !== 0) {
                $pair === 0;
            }

            $pair -= 1;
        }

        $result += $pair;
    }

    return $result / 2;
}
