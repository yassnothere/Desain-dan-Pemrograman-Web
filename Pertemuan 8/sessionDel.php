<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <?php
    // Kode untuk memanipulasi sesi, misalnya:
    session_unset();
    session_destroy();

    echo "Semua variabel sesi sekarang telah dihapus, dan sesi telah dihancurkan.";
    ?>
</body>
</html>