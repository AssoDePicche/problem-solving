<?php

function printArray(iterable $list): void
{
    foreach ($list as $item) {
        echo $item . ' ';
    }

    echo PHP_EOL;
}

function insertionSort1(int $n, array $a): void
{
    $x = $a[$n - 1];

    for (--$n; $n >= 0; $n--) {
        if ($a[$n] === $x) {
            continue;
        }

        if ($a[$n] > $x) {
            $a[$n + 1] = $a[$n];
        }

        if ($a[$n] < $x) {
            $a[$n + 1] = $x;
        }

        printArray($a);

        if ($a[$n + 1] > $a[$n - 1]) {
            break;
        }
    }

    if ($x === 1) {
        $a[0] = $x;

        printArray($a);
    }
}

$n = intval(trim(fgets(STDIN)));

$temp = rtrim(fgets(STDIN));

$array = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort1($n, $array);
