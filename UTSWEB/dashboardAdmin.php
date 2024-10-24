<?php
require('koneksi.php'); 
session_start();
$kritik_saran = [];

try {
    $stmt = $conn->prepare("SELECT * FROM KritikSaran ORDER BY CreatedAt DESC");
    $stmt->execute();
    
    $kritik_saran = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/dashboardAdmin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kritik dan Saran</title>
    <style>
    </style>
</head>
<body>
    <h1>Data Kritik dan Saran</h1>

    <?php if (count($kritik_saran) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kritik</th>
                    <th>Saran</th>
                    <th>Tanggal Dikirim</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kritik_saran as $row): ?>
                    <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><?php echo $row['Nama']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Kritik']; ?></td>
                        <td><?php echo $row['Saran']; ?></td>
                        <td><?php echo $row['CreatedAt']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Tidak ada data kritik dan saran yang tersedia.</p>
    <?php endif; ?>
    
    <a href="logout.php">
            Logout
        </a>
</body>
</html>
