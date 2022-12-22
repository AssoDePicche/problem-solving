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
