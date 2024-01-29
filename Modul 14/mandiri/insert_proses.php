<?php
    //memanggil file koneksi.php
    include "koneksi.php";
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $ttl=$_POST['ttl'];
    $alamat=$_POST['alamat'];
    $kota=$_POST['kota'];
    $jk=$_POST['jk'];

    // Menangkap nilai checkbox hobi yang dicentang
    $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : '';

    
    // Menangkap nilai dropdown ekskul
    if (isset($_POST['ekskul'])) {
        $ekskul = implode(", ", $_POST['ekskul']);
    }

    $query = "INSERT INTO tb_siswa (nis, nama, kelas, ttl, alamat, kota, jk, hobi, ekskul) VALUES ('$nis', '$nama', '$kelas', '$ttl', '$alamat', '$kota', '$jk', '$hobi', '$ekskul')";


    //hasil data array
    
    if (isset($_POST['submit'])){
        $hasil = mysqli_query($koneksi, $query);
        echo "Data berhasil disimpan ";
        echo "<a href='tampil.php'>Lihat Data</a>";
        
    }else{
        echo $jk;
    }


?>