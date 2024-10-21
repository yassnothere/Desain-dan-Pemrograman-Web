<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $totalFiles = count($_FILES['files']['name']);

    $allowedExtensions = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx", "txt");

    $targetDirectory = "documents/";
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];

        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (in_array($file_ext, $allowedExtensions) === false) {
            $errors[] = "File $file_name memiliki ekstensi yang tidak diizinkan. Hanya file dengan ekstensi jpg, jpeg, png, gif, pdf, doc, docx, dan txt yang diperbolehkan.";
        }

        if ($file_size > 2097152) {
            $errors[] = "File $file_name melebihi ukuran maksimum 2 MB.";
        }

        if (empty($errors)) {
            if (move_uploaded_file($file_tmp, $targetDirectory . $file_name)) {
                echo "File $file_name berhasil diunggah.<br>";
            } else {
                $errors[] = "Gagal mengunggah file $file_name.";
            }
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>

