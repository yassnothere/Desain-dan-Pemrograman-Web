<?php
$daftarNilaiMatematika = [
  ['Alice', 85],
  ['Bob', 92],
  ['Charlie', 78],
  ['David', 64],
  ['Eva', 90],
];

$daftarNilaiDiatasRata = [];
$totalNilai = 0;

// Hitung total nilai
foreach ($daftarNilaiMatematika as $nilai) {
  $totalNilai += $nilai[1];
}

// Hitung rata-rata jika jumlah siswa tidak nol
$rata = count($daftarNilaiMatematika) > 0 ? $totalNilai / count($daftarNilaiMatematika) : 0;

// Menyimpan nilai di atas rata-rata
foreach ($daftarNilaiMatematika as $nilai) {
  if ($nilai[1] > $rata) {
    $daftarNilaiDiatasRata[] = $nilai[0] . ' (' . $nilai[1] . ')';
  }
}

// Menampilkan hasil
echo "Jumlah siswa: " . count($daftarNilaiMatematika) . "<br>";
echo "Rata-rata nilai: $rata <br><br>";

echo "Daftar Nilai Ujian Matematika Di Atas Rata-rata: " . implode(', ', $daftarNilaiDiatasRata);
?>
