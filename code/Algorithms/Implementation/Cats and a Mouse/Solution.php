<?php

function catAndMouse(int $catA, int $catB, int $mouse): string
{
    $d1 = abs($mouse - $catA);

    $d2 = abs($mouse - $catB);

    if ($d1 === $d2) {
        return 'Mouse C';
    }

    if ($d1 < $d2) {
        return 'Cat A';
    }

    return 'Cat B';
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$stdin = fopen('php://stdin', 'r');

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%[^\n]", $xyz_temp);
    $xyz = explode(' ', $xyz_temp);

    $x = intval($xyz[0]);

    $y = intval($xyz[1]);

    $z = intval($xyz[2]);

    $result = catAndMouse($x, $y, $z);

    fwrite($fptr, $result . PHP_EOL);
}

fclose($stdin);

fclose($fptr);
