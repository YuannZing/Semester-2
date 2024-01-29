<?php
//detail
include "koneksi.php";
$nis=$_GET['nis'];
$query="SELECT * FROM tb_siswa WHERE nis='$nis'";
$hasil=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($hasil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Detail</title>
</head>

<body>

    <div class="container mt-5">
        <table class="table">
            <tr>
                <th class="table-secondary">NIS</th>
                <td class="table-secondary"> : </td>
                <td>
                    <?php echo $data['nis']; ?>
                </td>
            </tr>
            <tr>
                <th class="table-secondary">Nama</th>
                <td class="table-secondary"> : </td>
                <td>
                    <?php echo $data['nama']; ?>
                </td>
            </tr>
            <tr>
                <th class="table-secondary">Kelas</th>
                <td class="table-secondary"> : </td>
                <td>
                    <?php echo $data['kelas']; ?>
                </td>
            </tr>
            <tr>
                <th class="table-secondary">Tanggal Lahir</th>
                <td class="table-secondary"> : </td>
                <td>
                    <?php echo $data['ttl']; ?>
                </td>
            </tr>
            <tr>
                <th class="table-secondary">Alamat</th>
                <td class="table-secondary"> : </td>
                <td>
                    <?php echo $data['alamat']; ?>
                </td>
            </tr>
            <tr>
                <th class="table-secondary">Kota</th>
                <td class="table-secondary"> : </td>
                <td>
                    <?php echo $data['kota']; ?>
                </td>
            </tr>
            <tr>
                <th class="table-secondary">Jenis Kelamin</th>
                <td class="table-secondary"> : </td>
                <td>
                    <?php echo $data['jk']; ?>
                </td>
            </tr>
            <tr>
                <th class="table-secondary">Hobi</th>
                <td class="table-secondary"> : </td>
                <td>
                    <?php echo $data['hobi']; ?>
                </td>
            </tr>
            <tr>
                <th class="table-secondary">Ekstrakurikuler</th>
                <td class="table-secondary"> : </td>
                <td>
                    <?php echo $data['ekskul']; ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>