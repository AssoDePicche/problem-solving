<?php

function isNearTheHouse(int $start, int $end, int $fruit): bool
{
    return $fruit >= $start && $fruit <= $end;
}

function countApplesAndOranges(int $s, int $t, int $a, int $b, array $apples, array $oranges): void
{
    $applesInRange = 0;

    $orangesInRange = 0;

    foreach ($apples as $apple) {
        isNearTheHouse($s, $t, $a + $apple) && $applesInRange++;
    }

    foreach ($oranges as $orange) {
        isNearTheHouse($s, $t, $b + $orange) && $orangesInRange++;
    }

    echo $applesInRange . PHP_EOL . $orangesInRange;
}
