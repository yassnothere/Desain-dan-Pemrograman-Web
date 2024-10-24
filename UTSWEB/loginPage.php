<?php

require('koneksi.php');
session_start();
// Initialize error variables
$error1 = '';
$error2 = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $Query = "SELECT * FROM dbo.Users WHERE Username = '$username' AND Password = '$password'";
    $Data = $conn->query($Query);
    $Result = $Data->fetch();
    if(empty($Result)){
        header('Location:loginPage.php');
    } else {
        if($Result['Level']==2){
            $_SESSION['login']=$Result['Level'];
            header('Location:dashboardAdmin.php'); 
        } else {
            $_SESSION['login']=$Result['Level'];
            header('Location:dashboardUser.php');
        }
    }
}
?>


<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/loginStyle.css">
</head>

<body>
    
<header>
        <h1>Selamat Datang di Portal Kami</h1>
    </header>

    <form action="" method="POST">
        <h1>Login</h1>
        <p id="error"><?php echo $error1; ?></p>
        <p id="error"><?php echo $error2; ?></p>
        <input type="text" id="username" name="username" required placeholder="Username"><br><br>
        <input type="password" id="password" name="password" required placeholder="Password"><br><br>
        <input type="submit" value="Masuk">
    </form>
    </div>
</body>
</html>