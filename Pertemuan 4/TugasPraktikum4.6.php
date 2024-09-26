<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);
$twoLowest = array_slice($nilaiSiswa, 0, 2); // Ambil dua nilai terendah
echo "Nilai Terendah : " . implode(", ", $twoLowest). "<br>";

rsort($nilaiSiswa);
$twoHighest = array_slice($nilaiSiswa, 0, 2); // Ambil dua nilai tertinggi
echo "Nilai Tertinggi : " . implode(", ", $twoHighest). "<br>";

// Gabungkan dua nilai tertinggi dan terendah untuk diabaikan
$exclude = array_merge($twoLowest, $twoHighest);

// Mengabaikan dua nilai tertinggi dan terendah dari array asli
// Gunakan `array_filter` untuk menghapus semua kemunculan dari nilai yang akan diabaikan
$filteredNilaiSiswa = array_filter($nilaiSiswa, function($nilai) use ($exclude) {
    return !in_array($nilai, $exclude);
});
echo "Nilai Filter : " . implode(", ", $filteredNilaiSiswa). "<br>";

// Hitung rata-rata dari nilai yang tersisa setelah mengabaikan nilai tertinggi dan terendah
$average = !empty($filteredNilaiSiswa) ? array_sum($filteredNilaiSiswa) / count($filteredNilaiSiswa) : 0;

echo "Rata-rata nilai setelah mengabaikan 2 nilai tertinggi dan terendah adalah = $average";
?>
