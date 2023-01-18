<?php

// Single quote
echo 'Name : ';
echo 'Agung Triatna ';


// Double quote -> bisa menmabahkan escape sequence seperti \n, \t
echo 'Name : ';
echo 'Agung Triatna ';
echo "\n";


echo "Name : ";
echo "Agung \t Triatna ";
echo "\n";


// Multiline String

// Heredoc

echo <<<AGUNG
Ini adalah cara menggunakan
Heredoc di \t Php \n
AGUNG;


// Heredoc

echo <<<'AGUNG'
Ini adalah cara menggunakan
Heredoc di Php
AGUNG;
