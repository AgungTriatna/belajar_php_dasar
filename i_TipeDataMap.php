<?php

$name = array(
    "id" =>  "1",
    "nama" => "Agung",
    "umur" => 12
);


var_dump($name["nama"]);

$name = array(
    "id" =>  "1",
    "nama" => "Agung",
    "umur" => 12,
    "alamat" => [
        "kota" => "jakarta",
        "negara" => "indonesia"
    ]
);


var_dump($name["alamat"]["negara"]);
