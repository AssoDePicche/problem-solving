<?php

function compareTheTriplets(array $a, array $b): array
{
    $alice = 0;
    $bob = 0;

    for ($i = 0; $i < 3; $i++) {
        if ($a[$i] > $b[$i]) {
            $alice += 1;
        }

        if ($a[$i] < $b[$i]) {
            $bob += 1;
        }
    }

    return [$alice,$bob];
}
