<?php
require('koneksi.php');
$error1 = '';
$error2 = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    if ($action == "create") {
        $nama_jenis = $_POST['nama_jenis'];
        $warna = $_POST['warna'];
        $harga = $_POST['harga'];
        $stok = $_POST['tambah_stok'];
        $deskripsi = $_POST['deskripsi'];

        $createStmt = $conn->prepare('INSERT INTO kerudung (nama_jenis, warna, harga, stok, deskripsi) VALUES (:nama_jenis, :warna, :harga, :stok, :deskripsi)');
        $result = $createStmt->execute(['nama_jenis' => $nama_jenis, 'warna' => $warna, 'harga' => $harga, 'stok' => $stok, 'deskripsi' => $deskripsi]);
        if ($result) {
            header('Location: index.php');
        } else {
            echo "Terjadi kesalahan: " . print_r($createStmt->errorInfo());
        }

    } elseif ($action == "update") {
        $id = $_POST['update_id'];
        $update_stok = $_POST['update_stok'];

        $updateStmt = $conn->prepare('UPDATE kerudung SET stok = :update_stok WHERE id = :id');
        $result = $updateStmt->execute(['update_stok' => $update_stok, 'id' => $id]);
    
        if ($result) {
            header('Location: index.php');
        } else {
            echo "Terjadi kesalahan: " . print_r($updateStmt->errorInfo());
            
        }
    
    } elseif ($action == "delete") {
        $id = $_POST['delete_id'];
    
        $deleteStmt = $conn->prepare('DELETE FROM kerudung WHERE id = :id');
        $result = $deleteStmt->execute(['id' => $id]);
    
        if ($result) {
            header('Location: index.php');
        } else {
            echo "Terjadi kesalahan: " . print_r($deleteStmt->errorInfo());
        }
    }    
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<link rel="stylesheet" href="CSS/index.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jenis Kerudung</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>CRUD Jenis Kerudung</h2>
    <form method="post" action="">
        <label>Pilih Aksi:</label><br>
        <input type="radio" name="action" value="create" id="create" required> <label for="create">Tambah Barang Baru</label><br>
        <input type="radio" name="action" value="update" id="update"> <label for="update">Update Stok Barang</label><br>
        <input type="radio" name="action" value="delete" id="delete"> <label for="delete">Hapus Barang Jika Stok Habis</label><br><br>

        <div id="form-create" style="display: none;">
            <h3>Tambah Barang Baru</h3>
            Nama Jenis: <input type="text" name="nama_jenis"><br>
            Warna: <input type="text" name="warna"><br>
            Harga: <input type="number" name="harga" step="0.01"><br>
            Stok: <input type="number" name="tambah_stok"><br>
            Deskripsi: <textarea name="deskripsi"></textarea><br>
        </div>

        <div id="form-update" style="display: none;">
            <h3>Update Stok Barang</h3>
            ID Barang: <input type="number" name="update_id"><br>
            Update Stok: <input type="number" name="update_stok"><br>
        </div>

        <div id="form-delete" style="display: none;">
            <h3>Hapus Barang Jika Stok Habis</h3>
            ID Barang: <input type="number" name="delete_id"><br>
        </div>

        <br>
        <input type="submit" value="Submit">
    </form>

    <script>
        document.querySelectorAll('input[name="action"]').forEach((elem) => {
            elem.addEventListener("change", function() {
                document.getElementById("form-create").style.display = "none";
                document.getElementById("form-update").style.display = "none";
                document.getElementById("form-delete").style.display = "none";

                if (this.value === "create") {
                    document.getElementById("form-create").style.display = "block";
                } else if (this.value === "update") {
                    document.getElementById("form-update").style.display = "block";
                } else if (this.value === "delete") {
                    document.getElementById("form-delete").style.display = "block";
                }
            });
        });
    </script>
    <h2>Product Table</h2>

<?php 

$kerudung = [];
try {
    $stmt = $conn->prepare("SELECT * FROM kerudung ORDER BY id ASC");
    $stmt->execute();
    
    $kerudung = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


if (count($kerudung) > 0): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Jenis</th>
                <th>Warna</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kerudung as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nama_jenis']; ?></td>
                    <td><?php echo $row['warna']; ?></td>
                    <td><?php echo number_format($row['harga'], 2); ?></td>
                    <td><?php echo $row['stok']; ?></td>
                    <td><?php echo $row['deskripsi']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Tidak ada data produk yang tersedia.</p>
<?php endif; ?>
</body>
</html>
