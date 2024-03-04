<?php
session_start();
include("page/koneksi.php");
// if (!isset($_SESSION['admin_username'])) {
//     header("location:login.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Halaman Web Dinamais Dengan PHP</title>
    <!-- menghubungkan dengan file css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- menghubungkan dengan file jquery - misalkan ada -->
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
    <div class="menu">
        <header>
            <h1 class="judul">INI ADALAH HEADER</h1>
            <h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP</h3>
        </header>
        <div class="menu">
            <ul>
                <li><a href="p.php?page=home">HOME</a></li>
                <li><a href="p.php?page=tentang">DATA SISWA</a></li>
                <?php if (in_array("admin", $_SESSION['admin_akses'])) { ?>
                    <li><a href="p.php?page=kelola">KELOLA DATA SISWA</a></li>
                <?php } ?>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </div>
        <div class="badan">
            <?php
            // pemanggilan halaan dengan switch...case...
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                switch ($page){
                    case 'home':
                        include "page/home.php";
                        break;
                    case 'tentang':
                        include "page/tentang.php";
                        break;
                    case 'kelola':
                        include "page/kelola.php";
                        break;
                    default:
                        echo "<center><h3>Maaf Halaman tidak di temukan !</h3></center>";
                        break;
                }
            }else{
                include "page/home.php";
            }
            ?>
        </div>
        <footer>
            Ini adalah footer
        </footer>
    </div>
</body>
</html>