<?php

function seleksi() {

    $hitung = 30000 + 20000 + 100000;
    $hasil = $hitung - 55000;

    return $hasil;
}

echo "Sisa Uang Setyo : " . seleksi() . " Rupiah";
?>