<?php

function marcsCakewalk(array $calorie): int
{
    sort($calorie);

    $i = $miles = 0;

    $j = count($calorie) - 1;

    while ($j >= 0) {
        $miles += $calorie[$j] * (pow(2, $i));

        $j--;

        $i++;
    }

    return $miles;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$calorie_temp = rtrim(fgets(STDIN));

$calorie = array_map('intval', preg_split('/ /', $calorie_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = marcsCakewalk($calorie);

fwrite($fptr, $result . "\n");

fclose($fptr);
