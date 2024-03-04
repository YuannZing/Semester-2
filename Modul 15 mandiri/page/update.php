<div class="halaman">
    <!-- isi halaman update -->
    <?php
    include "koneksi.php";
    $id=$_GET['id'];
    $query="SELECT * FROM tb_siswa WHERE nis='$id';";
    $hasil=mysqli_query($koneksi_db,$query);
    $data=mysqli_fetch_array($hasil);
    ?>
    <h3>Edit Data</h3>
    <form action="" method="POST">
        <table border="1" align="center">
            <tr>
                <td>Nis</td>
                <td>: </td>
                <td><input type="text" name="nis" value="<?php echo $data['nis']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: </td>
                <td><textarea name="nama" value="<?php echo $data['nama']; ?>"></textarea></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="submit" value="UPDATE"></td>
            </tr>
        </table>
    </form>
    <a href="?page=kelola">Kembali Kelola</a>
</div>
<?php
// proses update
// @$id_konten = $_POST['id_konten'];
@$nis = $_POST['nis'];
@$nama = $_POST['nama'];
@$submit = $_POST['submit'];
if ($submit){
    $query_update = "UPDATE tb_siswa SET nama='$nama' WHERE nis='$nis';";
    $hasil = mysqli_query($koneksi_db,$query_update) or die ("ERROR UPDATE DATA");
    if ($hasil) {
        // jika berhasil update kembali ke halaman kelola
        header('Location: ?page=kelola');
    }
}
?>