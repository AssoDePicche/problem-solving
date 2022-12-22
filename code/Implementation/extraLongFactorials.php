<?php

function extraLongFactorials(int $n): void
{
    for ($factorial = '1'; $n > 0; $n--) {
        $factorial = bcmul($factorial, $n);
    }

    echo $factorial;
}
