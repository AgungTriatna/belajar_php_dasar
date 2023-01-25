<?php

$data = [
    "action" => "create"
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "nothing";
}


echo $action . PHP_EOL;



// VERSI NULL COALISING OPERATIOR


$data = [];

$action = $data["action"] ?? "nothing";

echo $action;
