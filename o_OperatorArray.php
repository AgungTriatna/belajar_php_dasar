<?php


$first = [
    "first_name" => "agung"
];

$last = [
    "first_name" => "kedua", // diignore karen sudah ada di array pertaman walaupun value tidak sama
    "last_name" => "tritna"
];


$union = $first + $last;

var_dump($union);
