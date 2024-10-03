<?php

function perkenenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan nama Saya ".$nama."<br/> ";
    echo "Senang berkenalan dengan Anda<br/> ";
}

perkenenalan("Diaz","Hallo");

echo "<hr>";

$saya = "Diaz";
$ucapanSalam = "Selamat Pagi";

perkenenalan($saya, $ucapanSalam);
?>