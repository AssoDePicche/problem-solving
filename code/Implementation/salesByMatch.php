<?php

function sockMerchant(int $n, array $array): int
{
    $pairs = [];

    $result = 0;

    foreach ($array as $item) {
        $pairs[$item]++;
    }

    foreach ($pairs as $pair) {
        $pair % 2 !== 0 && $pair--;

        $result += $pair;
    }

    return $result / 2;
}
