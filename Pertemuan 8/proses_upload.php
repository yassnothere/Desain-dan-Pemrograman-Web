<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "documents/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Periksa apakah ada file yang diunggah
if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif']; // Ekstensi file yang diizinkan

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); // Ambil ekstensi file

        // Periksa apakah ekstensi file diizinkan
        if (in_array($fileExtension, $allowedExtensions)) {
            $targetFile = $targetDirectory . $fileName;

            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                echo "File $fileName berhasil diunggah. <br>";
            } else {
                echo "Gagal mengunggah file $fileName. <br>";
            }
        } else {
            echo "File $fileName tidak diizinkan (hanya gambar dengan ekstensi .jpg, .jpeg, .png, .gif yang diperbolehkan). <br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
