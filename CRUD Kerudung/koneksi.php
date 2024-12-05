<?php
try {
    $serverName = "MSI\SQLEXPRESS"; 
    $database = "KERUDUNG"; 
    
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database;");
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>
