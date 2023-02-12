<?php

function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo implode(" + ", $values);
}

sumAll(1, 3, 4, 4);

$array = [1, 2, 1, 1];
echo implode("*", $array);
