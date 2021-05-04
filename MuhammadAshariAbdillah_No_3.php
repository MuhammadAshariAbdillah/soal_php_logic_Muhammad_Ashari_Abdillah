<?php


function seleksi(){

    $hitung1 = 100 / 1000;
    $hitung2 = 68 / 30100;
    $hitung3 = $hitung2 + $hitung1;

    $hasil = 81 / $hitung3;

    return $hasil;
}

echo "Pengeluaran toko kelontong 81 adalah : " . seleksi();

?>