<?php 
//form edit atau update
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
    <title>Edit</title>
</head>

<body>
    <div class="container mt-5">
        <form action="proses_update.php" method="post">
        <table class="table">
                            <tr>
                                <td class="text-start"><b>NIS</b></td>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="nis" name="nis" value="<?php echo $data['nis'];?>"></td>
                            </tr>
                            <tr>
                                <td class="text-start"><b>Nama</b>:</td>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'];?>"></td>
                            </tr>
                            <tr>
                        <td class="text-start"><b>Kelas</b>:</td>
                        <td>:</td>
                        <td>
                            <select class="form-select" id="kelas" name="kelas" value="<?php echo $data['kelas'];?>">
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start"><b>Tanggal Lahir</b>:</td>
                        <td>:</td>
                        <td><input type="date" class="form-control" id="ttl" name="ttl" value="<?php echo $data['ttl'];?>"></td>
                    </tr>
                    <tr>
                        <td class="text-start"><b>Alamat</b>:</td> 
                        <td>:</td>
                        <td><textarea class="form-control" id="alamat" name="alamat" rows="3" value="<?php echo $data['alamat'];?>"></textarea></td>
                    </tr>
                    <tr>
                         <td class="text-start"><b>Kota</b>:</td>
                         <td>:</td>
                         <td><input type="text" class="form-control" id="kota" name="kota" value="<?php echo $data['kota'];?>"></td>
                    </tr>
                    <tr>
                        <td class="text-start"><b>Jenis Kelamin</b>:</td>
                        <td>:</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" value="Laki-laki">
                                <label class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start"><b>Hobby</b>:</td>
                        <td>:</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" value="Membaca"><label class="form-check-label">Membaca</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" value="Olahraga"><label class="form-check-label">Olahraga</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" value="Menyanyi"><label class="form-check-label">Menyanyi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" value="Menari"><label class="form-check-label">Menari</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" value="Traveling"><label class="form-check-label">Traveling</label>
                            </div>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start"><b>Pilihan Ekskul</b>:</td>
                        <td>:</td>
                        <td>
                            <select class="form-select" id="ekskul" name="ekskul[]" size="6" multiple>
                                <option value="pramuka">Pramuka</option>
                                <option value="basket">Basket</option>
                                <option value="volly">Volly</option>
                                <option value="band">Band</option>
                                <option value="seni tari">Seni Tari</option>
                                <option value="robotic">Robotic</option>
                                <option value="bulutangkis">Bulu Tangkis</option>
                            </select>
                        </td>
                    </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
        <tr>
            <td colspan="3"><div class="grid gap-3">
                <input class="btn btn-primary" type="submit" value="Submit"><input class="btn btn-secondary" type="reset" value="Reset"></td>
                </div>
        </tr>
        </table>
        </form>
    </div>
</body>
</html>

