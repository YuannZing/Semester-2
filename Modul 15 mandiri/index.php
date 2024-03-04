<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    header("location:p.php");
}
include("page/koneksi.php");
$username = "";
$password = "";
$err = "";
if (isset($_POST['login'])) {
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    if ($username == '' or $password == '') {
        $err .= "<li>Silakan masukkan username dan password</li>";
    }
    if (empty($err)) {
        $sql1 = "SELECT * FROM tb_user WHERE username='$username'";
        $q1 = mysqli_query($koneksi_db, $sql1);
        $r1 = mysqli_fetch_array($q1);
        if ($r1['password'] != /*md5*/($password)) {
            $err .= "<li>Akun tidak ditemukan</li>";
        }
    }
    if (empty($err)) {
        $login_id = $r1['id_user'];
        $sql1 = "SELECT * from tb_user where id_user = '$login_id'";
        $q1 = mysqli_query($koneksi_db, $sql1);
        while ($r1 = mysqli_fetch_array($q1)) {
            $akses[] = $r1['level']; //spp, guru, siswa
        }
        if (empty($akses)) {
            $err .= "<li>Kamu tidak punya akses ke halaman admin</li>";
        }
    }
    if (empty($err)) {
        $_SESSION['admin_username'] = $username;
        $_SESSION['admin_akses'] = $akses;
        header("location:p.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="app">
        <h1>Halaman Login</h1>
        <?php
        if ($err) {
            echo "<ul>$err</ul>";
        }
        ?>
        <form action="" method="post">
            <input type="text" value="<?php echo $username ?>" name="username" class="input" placeholder="Isikan Username..." /><br /><br />
            <input type="password" name="password" class="input" placeholder="Isikan Password" /><br /><br />
            <input type="submit" name="login" value="Masuk Ke Sistem" />
        </form>
    </div>
</body>

</html>