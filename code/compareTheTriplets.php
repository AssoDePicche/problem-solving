<?php

function compareTriplets(array $a, array $b): array
{
    $alice = 0;
    $bob = 0;

    for ($i = 0; $i < 3; $i++) {
        $a[$i] > $b[$i] && $alice++;
        $a[$i] < $b[$i] && $bob++;
    }

    return [$alice,$bob];
}
