<?php

// Create simple string
$string = "Saya Belajar";
$string2 = 'PHP';
echo $string . ' - ' . $string2 . '<br>';

// String functions
$string = "Saya Belajar PHP";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('saya belajar php') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('Saya Belajar PHP') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('saya belajar php') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'PHP') . '<br>' . PHP_EOL;
echo "13 - " . stripos($string, 'PHP') . '<br>' . PHP_EOL;
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('PHP', 'Python', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('php', 'Python', $string) . '<br>' . '<br>' . PHP_EOL;

// String functions (Budi Version)
$string = "Budi";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('budi') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('Budi') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('Mamat') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'Budi') . '<br>' . PHP_EOL;
echo "13 - " . stripos($string, 'Budi') . '<br>' . PHP_EOL;
echo "14 - " . substr($string, 2) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('Budi', 'Mamat', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('budi', 'Mamat', $string) . '<br>' . '<br>' .PHP_EOL;

// String functions (Saya suka Belajar PHP Version)
$string = "Saya suka Belajar Php";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('saya') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('Saya') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('saya suka belajar php') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'PHP') . '<br>' . PHP_EOL;
echo "13 - " . stripos($string, 'PHP') . '<br>' . PHP_EOL;
echo "14 - " . substr($string, 11) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('PHP', 'Javascript', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('php', 'Javascript', $string) . '<br>' . '<br>' . PHP_EOL;

$invoice1 = 45;
$invoice2 = 98765;

echo str_pad($invoice1, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_pad($invoice2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;

echo '<br>';

$kalimat = "Hello, saya <b>Budi</b>";

echo "a. " . $kalimat . '<br>' . PHP_EOL;

echo "b. " . htmlentities($kalimat) . '<br>' . PHP_EOL;

$encoded = htmlentities($kalimat);
echo "c. " . html_entity_decode($encoded) . '<br>' . PHP_EOL;