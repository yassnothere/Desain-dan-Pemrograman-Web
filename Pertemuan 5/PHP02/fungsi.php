<?php

//membuat fungsi 
function hitungUmur($thn_lahir, $thn_sekarang) { 
  $umur = $thn_sekarang -  $thn_lahir;
  return $umur;
}


function perkenenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan nama Saya ".$nama."<br/> ";
    echo "Umur Saya adalah ". hitungUmur(2004, 2024) . " tahun <br/>";
    echo "Senang berkenalan dengan Anda<br/> ";
}

perkenenalan("Diaz","Hallo");

echo "<hr>";

$saya = "Diaz";
$ucapanSalam = "Selamat Pagi";

perkenenalan($saya);
?>