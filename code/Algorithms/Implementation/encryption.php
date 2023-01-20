<?php

function encryption(string $s)
{
    $s = str_replace(' ', '', $s);

    $length = strlen($s);

    $columns = ceil(sqrt($length));

    $encryption = '';

    for ($i = 0; $i < $columns; $i++) {
        $char = $i;

        $str = '';

        while ($char < $length) {
            $str .= $s[$char];

            $char += $columns;
        }

        $encryption .= $str . ' ';
    }

    return $encryption;
}
