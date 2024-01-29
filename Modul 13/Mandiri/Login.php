<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Mandiri</title>
    <link rel="stylesheet" href="lol.css">
</head>
<body>
    <form method="post" name="input">
        <h2>Halaman Login</h2>
           <li><b>Username</b>  : <input type="text" name="username"></li>
           <li><b>Password</b> : <input type="password" name="password"></li>
        <input type="submit" name="Login" value="Login">
        <input type="reset" name="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if (isset($_POST['Login'])) {
        $user = $_POST ['username'];
        $pass = $_POST ['password'];
        if ($user == "admin" && $pass == "1234") {
            header ("Location: Pendaftaran.php");
        }
        else {
            echo "<h2>Login Gagal</h2>";
        }
    }
?>
