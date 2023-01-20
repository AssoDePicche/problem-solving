<?php

function chocolateFeast(int $budget, int $cost, int $wrapperUnit): int
{
    $bars = floor($budget / $cost);

    $wrappers = $bars;

    while ($wrappers >= $wrapperUnit) {
        $extraBars = floor($wrappers / $wrapperUnit);

        $bars += $extraBars;

        $wrappers %= $wrapperUnit;

        $wrappers += $extraBars;
    }

    return $bars;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $n = intval($first_multiple_input[0]);

    $c = intval($first_multiple_input[1]);

    $m = intval($first_multiple_input[2]);

    $result = chocolateFeast($n, $c, $m);

    fwrite($fptr, $result . PHP_EOL);
}

fclose($fptr);
