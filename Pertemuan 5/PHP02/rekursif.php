<?php

function tampilkanAngka(int $jumlah, int $indeks = 1){
    echo "Perulangan ke-{$indeks} <br>";

    // Panggil diri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
    tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
?>