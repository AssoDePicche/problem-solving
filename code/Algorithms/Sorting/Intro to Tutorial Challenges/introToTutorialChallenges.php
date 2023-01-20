<?php

function introTutorial(int $v, array $array): int
{
    $length = count($array);

    for ($index = 0; $index < $length; $index++) {
        if ($array[$index] === $v) {
            return $index;
        }
    }
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$V = intval(trim(fgets(STDIN)));

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = introTutorial($V, $arr);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
