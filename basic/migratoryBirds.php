<?php

function migratoryBirds(array $birds)
{
    sort($birds);

    $count = [];

    foreach ($birds as $bird) {
        $count[$bird] = 0;
    }

    foreach ($birds as $bird) {
        $count[$bird]++;
        $max = max($count);
    }

    return array_search($max, $count);
}
