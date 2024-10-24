<?php
try {
    $serverName = "MSI\SQLEXPRESS"; 
    $database = "UTSWEB"; 
    
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database;");
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>
