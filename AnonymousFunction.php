<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Agung");

function sayGoodBy(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good By $finalName" . PHP_EOL;
}

sayGoodBy("eKO", function (string $name): string {
    return strtoupper($name);
});
