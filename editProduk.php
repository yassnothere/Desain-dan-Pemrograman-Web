<?php
session_start();
include 'config.php'; 

if (isset($_GET['id_produk'])) {
    $id_produk = $_GET['id_produk'];

    $sql = "SELECT * FROM produk_tb WHERE id_produk = $id_produk";
    $result = $koneksi->query($sql); 
    $produk = $result->fetch(PDO::FETCH_ASSOC); 

    if (!$produk) {
        echo "Produk tidak ditemukan!";
        exit();
    }
} else {
    echo "ID produk tidak ditemukan!";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_produk = $_POST['nama_produk'];
    $kategori_produk = $_POST['kategori_produk'];
    $harga_produk = $_POST['harga_produk'];
    $jumlah_stok = $_POST['jumlah_stok'];

    $sql = "UPDATE produk_tb SET nama_produk = '$nama_produk', kategori_produk = '$kategori_produk', harga_produk = '$harga_produk', jumlah_stok = '$jumlah_stok' WHERE id_produk = $id_produk"; // Query sederhana untuk update
    $result1 = $koneksi->query($sql); 

    if ($result1) {
        header("Location: display.php");
        exit();
    } else {
        echo "Gagal mengupdate produk!";
    }
}

?>



<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk Toko Bangunan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            width: 100%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
        }
        label {
            color: #333;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"] {
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .simpan_data {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            text-align: center;
        }
        .simpan_data:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Produk Toko Bangunan</h2>
        <form action="" method="POST">
            <label for="id_produk">ID Produk :</label>
            <input type="text" id="id_produk" name="id_produk" value="<?php echo $produk['id_produk']; ?>" required>

            <label for="nama_produk">Nama Produk :</label>
            <input type="text" id="nama_produk" name="nama_produk" value="<?php echo $produk['nama_produk']; ?>" required>

            <label for="kategori_produk">Kategori Produk :</label>
            <input type="text" id="kategori_produk" name="kategori_produk" value="<?php echo $produk['kategori_produk']; ?>"required>

            <label for="harga_produk">Harga Produk :</label>
            <input type="text" id="harga_produk" name="harga_produk" value="<?php echo $produk['harga_produk']; ?>" required>

            <label for="jumlah_stok">Jumlah Stok :</label>
            <input type="text" id="jumlah_stok" name="jumlah_stok" value="<?php echo $produk['jumlah_stok']; ?>" required>

            <button type="submit" class="simpan_perubahan" name="simpan_perubahan">Simpan Perubahan</button>
        </form>
    
    </div>
</body>
</html>