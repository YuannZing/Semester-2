<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th colspan="3">action</th>
        </tr>
        <?php
        include "koneksi.php"; //panggil file koneksi
        $query="SELECT * FROM tb_siswa"; //buat query sql
        $hasil=mysqli_query($koneksi,$query);
        $no=1;
        $jum=mysqli_num_rows($hasil);
        echo "Banyak Data :".$jum."<br>";
        //perulangan untuk nampilkan data dari database
        while ($data=mysqli_fetch_array($hasil)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nis'];?></td>
            <td><?php echo $data['nama'];?></td>
            <td><a href="detail.php?nis=<?php echo $data['nis'];?>">Detail</a></td>
            <td><a href="form_update.php?nis=<?php echo $data['nis'];?>">Edit</a></td>
            <td><a href="delete.php?nis=<?php echo $data['nis']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </body>
</html>
<?php
echo "<a href='insert.php'>Daftar </a>";
?>