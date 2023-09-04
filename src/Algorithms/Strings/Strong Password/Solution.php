<?php

define('MIN_PASSWORD_LENGTH', 6);

function minimumNumber(int $passwordLength, string $password): int
{
    $charsToAdd = 0;

    $requiredPatterns = ['/[a-z]/', '/[A-Z]/', '/[0-9]/', '/[!@#$%^&*()\-+]/'];

    foreach ($requiredPatterns as $requiredPattern) {
        !preg_match($requiredPattern, $password) && ++$charsToAdd;
    }

    return max($charsToAdd, (MIN_PASSWORD_LENGTH - $passwordLength));
}
