<?php
$totalSkor = 700; // anggap saja skor dari pemain game 650
$isDapatHadiah = false;

($totalSkor > 500) ? $isDapatHadiah = true : $isDapatHadiah = false;

echo "Total skor pemain adalah : $totalSkor <br>";
echo "Apakah pemain mendapatkan hadiah tambah? (" . ($isDapatHadiah ? "Yes" : "No") . ")";

?>