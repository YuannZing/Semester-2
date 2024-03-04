<div class="halaman">
    <!-- isi halaman Lihat Data -->
    <?php
    include "koneksi.php";
    $id=$_GET['id'];
    $query_lihat = "SELECT * FROM tb_siswa WHERE nis='$id';";
    $hasil=mysqli_query($koneksi_db,$query_lihat);
    $data=mysqli_fetch_array($hasil);
    $no=1;
    ?>
    <h3>Lihat Data</h3>
    <table border="1" align="center">
        <tr>
            <td>Nis : <?php echo $data['nis']; ?></td>
        </tr>
        <tr>
            <td>Nama : <?php echo $data['nama']; ?></td>
        </tr>
    </table>
    <a href="?page=kelola">Kembali Kelola</a>
</div>