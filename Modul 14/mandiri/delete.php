<?php 
include "koneksi.php";
$nis=$_GET['nis'];
$query= "DELETE FROM tb_siswa where nis='$nis'";
$hasil=mysqli_query($koneksi, $query);
if($hasil){
?>
<script language="javascript">document.location.href="tampil.php"</script>
<?php
}else{
    echo "gagal hapus data";
}
?>