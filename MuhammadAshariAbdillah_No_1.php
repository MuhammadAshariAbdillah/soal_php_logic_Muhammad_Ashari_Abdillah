<?php

function seleksi($satubuah, $satulusin, $uang) {
    
    $hitung = $satulusin * $satubuah;
    $hasil = $uang - $hitung;

    return $hasil;
}

$a = 1750;
$b = 12;
$c = 25000;

echo "Hasil Kembalian Rian Adalah : " . seleksi($a, $b, $c) . ' Rupiah';
?>