<?php

function kangaroo(int $x1, int $v1, int $x2, int $v2): string
{
    for ($i = 0; $i < 10000; $i++) {
        $x1 += $v1;

        $x2 += $v2;

        if ($x1 === $x2) {
            return "YES";
        }
    }

    return "NO";
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$x1 = intval($first_multiple_input[0]);

$v1 = intval($first_multiple_input[1]);

$x2 = intval($first_multiple_input[2]);

$v2 = intval($first_multiple_input[3]);

$result = kangaroo($x1, $v1, $x2, $v2);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
