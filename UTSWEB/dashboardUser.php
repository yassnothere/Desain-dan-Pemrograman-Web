<?php
require('koneksi.php'); 
session_start();
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kritik = $_POST['kritik'];
    $saran = $_POST['saran'];

    if (empty($nama) || empty($email) || empty($kritik) || empty($saran)) {
        $error = "Semua field harus diisi.";
    } else {
        try {
            $stmt = $conn->prepare("INSERT INTO KritikSaran (Nama, Email, Kritik, Saran) 
                                    VALUES (:Nama, :Email, :Kritik, :Saran)");
            $stmt->execute([
                'Nama' => $nama,
                'Email' => $email,
                'Kritik' => $kritik,
                'Saran' => $saran
            ]);

            $success = "Kritik dan saran Anda berhasil dikirim!";
        } catch (PDOException $e) {
            $error = "Terjadi kesalahan: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/dashboardUser.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kritik dan Saran</title>
</head>
<body>
    <h1>Form Kritik dan Saran</h1>
    
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if (!empty($success)): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="kritik">Kritik:</label><br>
        <textarea id="kritik" name="kritik" required></textarea><br><br>

        <label for="saran">Saran:</label><br>
        <textarea id="saran" name="saran" required></textarea><br><br>

        <input type="submit" value="Kirim">

        <a href="logout.php">
            Logout
        </a>
    </form>
</body>
</html>