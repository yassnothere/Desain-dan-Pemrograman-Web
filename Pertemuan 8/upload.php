<?php
if (isset($_POST["submit"])) {
    $target_dir = "uploads/"; // Direktori tujuan untuk menyimpan file
    $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
    $maxsize = 3 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
            echo "File berhasil diunggah.<br>";
            
            $safe_target_file = htmlspecialchars($target_file, ENT_QUOTES, 'UTF-8');

            echo "<img src='$target_file' style='width: 200px; height: auto;' alt='Thumbnail'><br>";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>
