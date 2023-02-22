<?php

function migratoryBirds(array $birds)
{
    sort($birds);

    $count = [];

    foreach ($birds as $bird) {
        $count[$bird]++;
    }

    $max = max($count);

    return array_search($max, $count);
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$arr_count = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds($arr);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
