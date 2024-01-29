<?php 
if (isset($_POST['Kirim'])) {
    
    $NIS = $_POST['nis'];
    $Nama = $_POST['nama'];
    $Kelas = $_POST['kelas'];
    $Date = $_POST['date'];
    $Alamat = $_POST['alamat'];
    $Kelamin = $_POST['kelamin'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
        <table>
            <tr>
                <h1>PENDAFTARAN EKSTRAKURIKULER</h1><hr><br>
            </tr>
            <tr>

                <table>
                    <tr>
                        <td><b>NIS</b></td>
                        <td>:</td>
                        <td><?=$NIS?></td>
                    </tr>
                    <tr>
                        <td><b>Nama</b></td>
                        <td>:</td>
                        <td><?=$Nama?></td>
                    </tr>
                    <tr>
                        <td><b>Kelas</b></td>
                        <td>:</td>
                        <td><?=$Kelas?></td>
                    </tr>
                    <tr>
                        <td><b>Tanggal Lahir</b></td>
                        <td>:</td>
                        <td><?=$Date?></td>
                    </tr>
                    <tr>
                        <td><b>Alamat</b></td>
                        <td>:</td>
                        <td><?=$Alamat?></td>
                    </tr>
                    <tr>
                        <td><b>Jenis Kelamin</b></td>
                        <td>:</td>
                        <td><?=$Kelamin?></td>
                    </tr>
                    <tr>
                        <td><b>Hobby</b></td>
                        <td>:</td>
                        <td><?php 
                        if (isset($_POST['hoby1'])) {
                            echo "- " . $_POST['hoby1'] . "<br>";
                        }
                        if (isset($_POST['hoby2'])) {
                            echo "- " . $_POST['hoby2'] . "<br>";
                        }
                        if (isset($_POST['hoby3'])) {
                            echo "- " . $_POST['hoby3'] . "<br>";
                        }
                        if (isset($_POST['hoby4'])) {
                            echo "- " . $_POST['hoby4'] . "<br>";
                        }
                        if (isset($_POST['hoby5'])) {
                            echo "- " . $_POST['hoby5'] . "<br>";
                        }
                        ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b>Pilihan Ekskul</b></td>
                        <td>:</td>
                        <td><?php 
                            if (isset($_POST['ekskul'])) {
                            $az = $_POST['ekskul'];
                            foreach ($az as $a){
                                echo "$a <br>";
                            }
                        }
                        ?></td>
                    </tr>
                </table>
            </tr>
        </table>
        <br>
    </center>
</body>
</html>