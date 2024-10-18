<?php
if(isset($_POST["submit"])){
  $target_dir = "uploads/"; // Direktori tujuan untuk menyimpan file
  $target_file = $target_dir . basename($_FILES["myfile"]["name"]);

    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
      echo "File berhasil diunggah.";
    } else {
      echo "Gagal mengunggah file.";
    }
  }
?>