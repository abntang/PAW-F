<?php

// Declare variables
$nama = "Bintang";  // String
$umur = 20;         // Integer
$Smenikah = true;   // Boolean
$tinggi = 1.85;     // Float
$pekerjaan = null;  // Null

// Print variables
echo $nama . '<br>';
echo $umur . '<br>';
echo $Smenikah . '<br>';
echo $tinggi . '<br>';
echo $pekerjaan . '<br>';

// Print type variables
echo gettype($nama) . '<br>';
echo gettype($umur) . '<br>';
echo gettype($Smenikah) . '<br>';
echo gettype($tinggi) . '<br>';
echo gettype($pekerjaan) . '<br><br>';

// Print the whole variable
echo var_dump($nama, $umur, $Smenikah, $tinggi, $pekerjaan);

// Print variables and type variables
echo '<br><br>nama: ' . $nama . ' (' . gettype($nama) . ')<br>';
echo 'umur: ' . $umur . ' (' . gettype($umur) . ')<br>';
echo 'status menikah: ' . $Smenikah . ' (' . gettype($Smenikah) . ')<br>';
echo 'tinggi: ' . $tinggi . ' (' . gettype($tinggi) . ')<br>';
echo 'pekerjaan: ' . $pekerjaan . ' (' . gettype($pekerjaan) . ')<br><br>';

// Variable checking functions
is_string($nama);       // true
is_int($umur);          // true
is_bool($Smenikah);     // true
is_double($tinggi);     // true

// Print the whole function variable checking
echo var_dump(is_string($nama), is_int($umur), is_bool($Smenikah), is_double($tinggi));