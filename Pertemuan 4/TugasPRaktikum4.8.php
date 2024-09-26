<?php
$totalSkor = 700; // anggap saja skor dari pemain game 650

// Menggunakan operasi ternary untuk menentukan apakah pemain mendapatkan hadiah
$isDapatHadiah = ($totalSkor > 500) ? true : false;

echo "Total skor pemain adalah : $totalSkor <br>";
echo "Apakah pemain mendapatkan hadiah tambah? (" . ($isDapatHadiah ? "Yes" : "No") . ")";
?>
