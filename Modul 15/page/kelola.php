<div class="halaman">
    <!-- isi halaman anda -->
    <?php
    include "koneksi.php";
    if(isset($_GET['page'])){
        @$aksi = $_GET['aksi'];
        switch ($aksi){
            // menampilkan data kelola 
            default;
            $query="SELECT * FROM tb_konten";
            $hasil=mysqli_query($koneksi_db,$query);
           ?>
           <center><h2>Halaman Kelola Konten</h2></center>
           <a href="?page=kelola&aksi=tambah">Tambah</a>
           <table border=1 align=center>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Isi</th>
                <th colspan="3">Action</th>
            </tr>
            <?php
            $no=1;
            while ($data=mysqli_fetch_array($hasil)){?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $data['kategori'];?></td>
                <td><?php echo $data['isi'];?></td>
                <td><a href="?page=kelola&aksi=lihat&id=<?php echo $data['id_konten']?>">View</a></td>
                <td><a href="?page=kelola&aksi=update&id=<?php echo $data['id_konten']?>">Update</a></td>
                <td><a href="?page=kelola&aksi=delete&id=<?php echo $data['id_konten']?>" onclick="return confirm('Apakah anda yakin menghapus data?')">Delete</a></td>
            </tr>
            <?php
            }
            ?>
           </table> 
        <?php
        break;
        case "tambah":
            include "page/tambah.php";
            break;
        // Lihat Data
        case "lihat":
            include "page/lihat.php";
            break;
        // Update data
        case "update":
            include "page/update.php";
            break;
        // Delete Data
        case "delete":
            include "page/delete.php";
            break;
        }
        }else {
            include "page/home.php";
        }
        ?>
</div>