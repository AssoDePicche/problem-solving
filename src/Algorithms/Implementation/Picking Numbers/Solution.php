<?php

function pickingNumbers(array $list): int
{
    $max = PHP_INT_MIN;

    sort($list);

    $size = count($list);

    for ($i = 0; $i < $size; $i++) {
        $count = 0;

        for ($j = $i + 1; $j < $size; $j++) {
            $difference = abs($list[$i] - $list[$j]);

            $count += intval($difference <= 1);
        }

        $max = max($max, $count);
    }

    return $max + 1;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$n = intval(trim(fgets(STDIN)));

$temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

$result = pickingNumbers($a);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
