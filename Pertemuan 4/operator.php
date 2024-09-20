<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah = $a + $b = $hasilTambah<br>";
echo "Hasil Kurang = $a - $b = $hasilKurang<br>";
echo "Hasil Kali = $a * $b = $hasilKali<br>";
echo "Hasil Bagi = $a / $b = $hasilBagi<br>";
echo "Hasil Sisa Bagi = $a % $b = $sisaBagi<br>";
echo "Hasil Pangkat = $a ** $b = $pangkat<br>";

echo "<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah $a sama dengan $b? : " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Apakah $a tidak sama dengan $b? : " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Apakah $a lebih kecil dari $b? : " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Apakah $a lebih besar dari $b? : " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Apakah $a lebih kecil atau sama dengan $b? : " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Apakah $a lebih besar atau sama dengan $b? : " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";
?>