<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Dosen</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f0f4f8;
      margin: 0;
      padding: 0;
      color: #333;
      text-align: center;
    }

    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
      padding: 20px;
      border-radius: 15px;
      border: 1px solid #ddd;
      background-color: #fff;
      width: max-content;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      margin: 50px auto;
      transition: box-shadow 0.3s ease;
    }

    .container:hover {
      box-shadow: 0 6px 30px rgba(0, 0, 0, 0.2);
    }

    .container img {
      object-fit: cover;
      border-radius: 15px;
      height: 200px;
      width: 170px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
    }

    .data table {
      border-collapse: collapse;
      text-align: left;
    }

    .data table td {
      padding: 10px 20px;
    }

    .data table td:first-child {
      font-weight: bold;
      color: #2c3e50;
    }

    .data table td:last-child {
      color: #7f8c8d;
    }

    h2 {
      color: #34495e;
      font-size: 2rem;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <h2>Profil Dosen</h2>

  <?php
    $Dosen = [
      'nama' => 'Elok Nur Hamdana',
      'domisili' => 'Malang',
      'jenis_kelamin' => 'Perempuan'
    ];
  ?>
  
  <div class="container">
    <img src="https://cdn-icons-png.flaticon.com/512/2507/2507657.png" alt="Profil Picture">
    <div class="data">
      <table cellpadding="5">
        <tr>
          <td>Nama</td>
          <td><?php echo $Dosen['nama']; ?></td>
        </tr>
        <tr>
          <td>Domisili</td>
          <td><?php echo $Dosen['domisili']; ?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
      </table>
    </div>
  </div>

</body>
</html>
