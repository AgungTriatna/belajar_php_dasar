<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

SayHello("Agung", "strtoupper");
SayHello("TRIATNA", "strtolower");
SayHello("Agung", function (string $name): string {
    return strtoupper($name);
});
sayHello("Agung", fn ($name) => strtoupper($name));
