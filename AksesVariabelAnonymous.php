<?php

// untuk mengakses variabel di luar anonymouse function gunakan "USE"

$firstName = "Agung";
$lastName = "Triatna";


$sayHelloAgung = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloAgung();
