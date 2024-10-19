<?php
//Lokasi penyimpan file yang diunggah
$targetDirectory = "documents/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name']);

// Loop melalui semua file yang diunggah 
    for ($i =  0; $i < $totalFiles; $i++) {
        $fileName = $_FILES
    }
?>