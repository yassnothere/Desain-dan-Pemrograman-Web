<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $totalFiles = count($_FILES['files']['name']);

    // Daftar ekstensi yang diizinkan (gambar dan dokumen)
    $allowedExtensions = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx", "txt");

    // Periksa apakah direktori penyimpanan sudah ada, jika tidak maka buat
    $targetDirectory = "documents/";
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    // Loop untuk setiap file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];

        // Mengambil ekstensi file
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Cek apakah ekstensi file diperbolehkan
        if (in_array($file_ext, $allowedExtensions) === false) {
            $errors[] = "File $file_name memiliki ekstensi yang tidak diizinkan. Hanya file dengan ekstensi jpg, jpeg, png, gif, pdf, doc, docx, dan txt yang diperbolehkan.";
        }

        // Cek ukuran file (maksimum 2 MB)
        if ($file_size > 2097152) {
            $errors[] = "File $file_name melebihi ukuran maksimum 2 MB.";
        }

        // Jika tidak ada error, pindahkan file ke folder "documents"
        if (empty($errors)) {
            if (move_uploaded_file($file_tmp, $targetDirectory . $file_name)) {
                echo "File $file_name berhasil diunggah.<br>";
            } else {
                $errors[] = "Gagal mengunggah file $file_name.";
            }
        }
    }

    // Jika ada error, tampilkan
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
