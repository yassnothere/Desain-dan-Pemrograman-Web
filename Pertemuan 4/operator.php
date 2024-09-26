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

echo "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";

echo "Hasil AND = $a && $b " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR = $a || $b " . ($hasilOr ? 'true' : 'false'). "<br>" ;
echo "Hasil NOT A = !$a " . ($hasilNotA ? 'true' : 'false') ."<br>";
echo "Hasil NOT B = !$b " . ($hasilNotB ? 'true' : 'false'). "<br>";

echo "<br><br>";

echo "$a += $b = " . ($a += $b) . "<br>";
echo "$a -= $b = " . ($a -= $b) . "<br>";
echo "$a *= $b = " . ($a *= $b) . "<br>";
echo "$a /= $b = " . ($a /= $b) . "<br>";
echo "$a % $b = " . ($a % $b) . "<br>";

echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik : " . ($hasilIdentik ? "True" : "False") . "<br>";
echo "Hasil Tidak Identik : " . ($hasilTidakIdentik ? "True" : "False");
?>