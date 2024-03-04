    <div class="halaman">
        <!-- isi halaman about -->
    <h2>List Data</h2>
    

<center>
    <!-- Table -->
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>Nama</th>
        </tr>

        <?php
    include "koneksi.php";
    $query="SELECT * FROM tb_siswa";
    $hasil=mysqli_query($koneksi_db,$query);
    // $data=mysqli_fetch_array($hasil);
    $no=1;
    $jum=mysqli_num_rows($hasil);
    ?>
    <h4><?php echo "Banyak Data : " .$jum?></h4>
    <?php
    while ($data=mysqli_fetch_array($hasil)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nis'];?></td>
            <td><?php echo $data['nama'];?></td>   
        </tr>
        <?php
        }
        ?>
    </table>

</center>
    
    </div>
