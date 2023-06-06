<?php

define('MIN_PASSWORD_LENGTH', 6);

function minimumNumber(int $length, string $password): int
{
    $charsToAdd = 0;

    !preg_match('/[a-z]/', $password) && $charsToAdd++;

    !preg_match('/[A-Z]/', $password) && $charsToAdd++;

    !preg_match('/[0-9]/', $password) && $charsToAdd++;

    !preg_match('/[!@#$%^&*()\-+]/', $password) && $charsToAdd++;

    $matchPasswordSize = (($charsToAdd + $length) >= MIN_PASSWORD_LENGTH);

    return $matchPasswordSize ? $charsToAdd : MIN_PASSWORD_LENGTH - $length;
}
