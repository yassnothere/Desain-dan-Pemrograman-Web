<?php

require('koneksi.php');

// Initialize error variables
$error1 = '';
$error2 = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = 1;

    $stmt = $conn->prepare("SELECT * FROM Users WHERE Username = :Username");
    $stmt->execute(['Username' => $username]);
    $user = $stmt->fetch();

    if ($username == $user['Username']) {
        $error1 = 'Username already exist, please pick another Username' . '<br><br>';
    } else if ($email == $user['Email']) {
        $error2 = 'Email already registered, please pick another Email' . '<br><br>';
    } else {
        $stmt = $conn->prepare('INSERT INTO Users (Username, Email, Password, Level) VALUES (:Username, :Email, :Password, :Level)');
        $stmt->execute(['Username' => $username, 'Email' => $email, 'Password' => $password, 'Level' => $level]);

        header('Location: loginPage.php');
    }

}
?>


<html>

<head>
    <title>Register Page</title>
    <link rel="stylesheet" href="css/registerStyle.css">
</head>

<body>
    <form action="registerPage.php" method="POST">
        <h1>Register</h1>
        <p id="error"><?php echo $error1; ?></p>
        <p id="error"><?php echo $error2; ?></p>
        <input type="text" id="username" name="username" required placeholder="Username"><br><br>
        <input type="text" id="email" name="email" required placeholder="E-mail"><br><br>
        <input type="password" id="password" name="password" required placeholder="Password"><br><br>
        <input type="submit">
        <p>Already have an account? click <a href="loginPage.php">here</a> to log in</p>
    </form>
</body>

</html>