<?php

function sockMerchant(int $numberOfSocks, array $socks): int
{
    $socksCounts = [];

    $pairCount = 0;

    for ($index = 0; $index < $numberOfSocks; ++$index) {
        $sock = $socks[$index];

        if (!isset($socksCounts[$sock])) {
            $socksCounts[$sock] = 0;
        }

        ++$socksCounts[$sock];

        $socksCounts[$sock] % 2 === 0 && ++$pairCount;
    }

    return $pairCount;
}
