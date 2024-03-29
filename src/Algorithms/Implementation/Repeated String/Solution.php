<?php

function repeatedString(string $s, int $n): int
{
    $a = 0;

    $len = strlen($s);

    if ($n >= $len) {
        $a = substr_count($s, 'a');

        $a *= floor($n / $len);
    }

    for ($i = 0; $i < $n % $len; $i++) {
        $s[$i] === 'a' && $a++;
    }

    return $a;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$s = rtrim(fgets(STDIN), "\r\n");

$n = intval(trim(fgets(STDIN)));

$result = repeatedString($s, $n);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
