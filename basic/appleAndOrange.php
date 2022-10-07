<?php

function countApplesAndOranges(int $s, int $t, int $a, int $b, array $apples, array $oranges): void
{
    $applesInRange = 0;
    $orangesInRange = 0;

    foreach ($apples as $apple) {
        if ($a + $apple >= $s && $a + $apple <= $t) {
            $applesInRange++;
        }
    }

    foreach ($oranges as $orange) {
        if ($b + $orange >= $s && $b + $orange <= $t) {
            $orangesInRange++;
        }
    }

    printf("%d\n%d", $applesInRange, $orangesInRange);
}
