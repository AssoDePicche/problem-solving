<?php

function printArray(array $array, int $size): void
{
    for ($i = 0; $i < $size; $i++) {
        echo $array[$i] . ' ';
    }

    echo PHP_EOL;
}

function insertionSort(array $list, int $size)
{
    for ($i = 1; $i < $size; $i++) {
        $temp = $list[$i];

        $j = $i - 1;

        while ($j >= 0 && $list[$j] > $temp) {
            $list[$j + 1] = $list[$j];

            $j = $j - 1;

            printArray($list, $size);
        }

        $list[$j + 1] = $temp;
    }

    printArray($list, $size);
}

$n = intval(trim(fgets(STDIN)));

$temp = rtrim(fgets(STDIN));

$array = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort($array, $n);
