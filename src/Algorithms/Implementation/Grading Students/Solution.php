<?php

define('MIN_GRADE_FOR_ROUNDING', 38);

function roundGrade(int $grade): int
{
    $minRoudingDifference = ($grade % 5);

    return match ($minRoudingDifference) {
        3 => ($grade + 2),
        4 => ++$grade,
        default => $grade
    };
}

function gradingStudents(array $grades): array
{
    return array_map(
        fn (int $grade) => ($grade < MIN_GRADE_FOR_ROUNDING)
            ? $grade
            : roundGrade($grade),
        $grades
    );
}
