<?php
try {
    $serverName = "MSI\SQLEXPRESS"; // Nama atau IP server SQL Server
    $database = "UTSWEB"; // Nama database
    // Menggunakan Trusted Connection untuk otentikasi Windows
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database;");
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>
