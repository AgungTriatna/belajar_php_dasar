<?php

// untuk membuat arrow function dengan kata kunci fn

$firstName = "Agung";
$lastName = "Triatna";

$Arrow = fn () => "Hallo $firstName $lastName" . PHP_EOL;

echo $Arrow();
