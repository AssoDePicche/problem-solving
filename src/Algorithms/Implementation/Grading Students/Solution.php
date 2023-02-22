<?php

function gradingStudents(array $grades): array
{
    $length = count($grades);

    for ($i = 0; $i < $length; $i++) {
        if ($grades[$i] < 38) {
            continue;
        }

        $modulo = $grades[$i] % 5;

        $modulo === 3 && $grades[$i] += 2;

        $modulo === 4 && $grades[$i]++;
    }

    return $grades;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $count; $i++) {
    $item = intval(trim(fgets(STDIN)));
    $grades[] = $item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode(PHP_EOL, $result) . PHP_EOL);

fclose($fptr);
