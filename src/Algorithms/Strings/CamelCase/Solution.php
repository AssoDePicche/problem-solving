<?php

function camelCase(string $s)
{
    return preg_match_all('/[A-Z]/', $s) + 1;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$s = rtrim(fgets(STDIN), "\r\n");

$result = camelcase($s);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
