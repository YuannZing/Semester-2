<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>CRUD Table with Bootstrap</title>
</head>
<body>
    <?php
include "koneksi.php"; //panggil file koneksi
$query="SELECT * FROM tb_siswa"; //buat query sql
$hasil=mysqli_query($koneksi,$query);
$no=1;
$jum=mysqli_num_rows($hasil);
//perulangan untuk nampilkan data dari database
?>
<div class="container mt-5">
    <h2 class="mb-1">List Data</h2>
    <h6 class="mb-4"><?php echo "Banyak Data : " .$jum?></h6>

    <!-- Create Button -->
    <a href='insert.php'><button class="btn btn-primary mb-3">Tambah Data</button></a>

    <!-- Table -->
    <table class="table">
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>Nama</th>
            <th colspan="3">Action</th>
        </tr>

        <?php
        while ($data=mysqli_fetch_array($hasil)){
        ?>
        <!-- kacau -->
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nis'];?></td>
            <td><?php echo $data['nama'];?></td>   
            <td><a href="detail.php?nis=<?php echo $data['nis'];?>"><button type="button" class="btn btn-secondary">Detail</button></a></td>
            <td><a href="form_update.php?nis=<?php echo $data['nis'];?>"><button type="button" class="btn btn-success">Edit</button></a></td>
            <td><a href="delete.php?nis=<?php echo $data['nis']; ?>" onclick="return confirm('Apakah anda yakin?')"><button type="button" class="btn btn-danger">Delete</button></a></td>
        </tr>
        <?php
        }
        ?>
        <!-- kacau -->
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>