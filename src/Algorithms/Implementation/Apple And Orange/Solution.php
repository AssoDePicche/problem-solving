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

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$s = intval($first_multiple_input[0]);

$t = intval($first_multiple_input[1]);

$second_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$a = intval($second_multiple_input[0]);

$b = intval($second_multiple_input[1]);

$third_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$m = intval($third_multiple_input[0]);

$n = intval($third_multiple_input[1]);

$apples_temp = rtrim(fgets(STDIN));

$apples = array_map('intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));

$oranges_temp = rtrim(fgets(STDIN));

$oranges = array_map('intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);
