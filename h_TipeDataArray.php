<?php

// Tipe data yang berisikan kosong atau banyak data
// Bisa berisi data yang berbeda beda
// di Php panjang aray dinamis

$values = array(1, 2, 3, 4.5);
var_dump($values);



$names = ["Agung", "Triatna", "belajar"];
var_dump($names);


// operasi array
// $array[index] -> mengakses data
// $array[index] = value -> mengubah data di nomer index
// $array[] = value -> menambah array di posisi paling belakang
// unset($array[index]) -> menghapus data di array, dengan index otomatis hilang
// count($array) -> menghitung jumlah data array

var_dump($names[1]);

$names[1] = "Berubah"; // megubah data array
var_dump($names[1]);

unset($names[1]); // menghapus data array
var_dump($names);

var_dump(count($names)); // mehgitung jumlah array

$names[] = "terakhir"; // nambah data di akhi array

var_dump($names);
