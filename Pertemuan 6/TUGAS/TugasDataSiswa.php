<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa</title>
  <link rel="stylesheet" href="styleDataSiswa.css">
  <script src="jquery-3.7.1.js"></script>
  <script>
    $(document).ready(function() {
      $(".show-db").click(function() {
        $(".data").slideToggle("slow");
        $(".data table, .data h2").toggleClass("show").fadeToggle("slow");
      });
    });
  </script>
</head>

<body>
  <?php
  $dataSiswa = [
    ['nama' => 'Andi', 'umur' => 15, 'kelas' => '10A', 'alamat' => 'Malang'],
    ['nama' => 'Siti', 'umur' => 16, 'kelas' => '10B', 'alamat' => 'Batu'],
    ['nama' => 'Budi', 'umur' => 15, 'kelas' => '10A', 'alamat' => 'Dinoyo'],
    ['nama' => 'Anton', 'umur' => 25, 'kelas' => '15A', 'alamat' => 'Dinoyo'],
  ];

  function displayData($dataSiswa) {
    foreach ($dataSiswa as $item) {
      echo "<tr>";
      echo "<td>{$item['nama']}</td>";
      echo "<td>{$item['umur']}</td>";
      echo "<td>{$item['kelas']}</td>";
      echo "<td>{$item['alamat']}</td>";
      echo "</tr>";
    }
  }

  function countAgeAvg($dataUmur) {
    $totalUmur = array_sum(array_column($dataUmur, 'umur'));
    $avg = $totalUmur / count($dataUmur);
    return $avg;
  }
  ?>

  <h1>Data Siswa</h1>
  <div class="container">
    <span class="show-db">Click to Show Database</span>
    <div class="data fade-slide">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
          <?php displayData($dataSiswa); ?>
        </tbody>
      </table>
      <h2 class="rata">Rata-rata Umur Siswa: <span class="age"><?php echo round(countAgeAvg($dataSiswa), 2); ?></span> tahun</h2>
    </div>
  </div>

  <!-- Bootstrap JS for responsive table and interactions -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
