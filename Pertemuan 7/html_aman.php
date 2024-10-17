<!DOCTYPE html>
<html>

<head>
  <title>Formulir</title>
</head>

<body>
  <form method="post" action="">
    <h2>Form</h2>
    <input type="text" name="input"><br>
    <label for="email">Masukkan Email:</label><br>
    <input type="email" name="email" id="email"><br><br>
    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    if (!empty($input)) {
      $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
      echo $input;
    } else {
      echo "Data input kosong";
    }

    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<br>Alamat email $email valid.";
    } else {
      echo "<br>Alamat email tidak valid.";
    }
  }
  ?>
</body>

</html>