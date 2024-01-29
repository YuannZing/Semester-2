<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            border: none;
        }
    </style>
</head>
<body>
<form action="insert_proses.php" method="post">
<div class="container md">
        <table class="table" width="50%" height="100%">
                <tr>
                    <th class="text-center"><h2>PENDAFTARAN EKSTRAKURIKULER</h2></th>
                </tr>
                <tr>
                    <td><hr class="border border-black border-2 opacity-75"></td>
                </tr>
                <tr>
                    <table class="table">
                        
                            <tr>
                                <td class="text-start"><b>NIS</b></td>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="nis" name="nis"></td>
                            </tr>
                            <tr>
                                <td class="text-start"><b>Nama</b>:</td>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="nama" name="nama"></td>
                            </tr>
                            <tr>
                        <td class="text-start"><b>Kelas</b>:</td>
                        <td>:</td>
                        <td>
                            <select class="form-select" id="kelas" name="kelas">
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start"><b>Tanggal Lahir</b>:</td>
                        <td>:</td>
                        <td><input type="date" class="form-control" id="ttl" name="ttl"></td>
                    </tr>
                    <tr>
                        <td class="text-start"><b>Alamat</b>:</td>
                        <td>:</td>
                        <td><textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea></td>
                    </tr>
                    <tr>
                         <td class="text-start"><b>Kota</b>:</td>
                         <td>:</td>
                         <td><input type="text" class="form-control" id="kota" name="kota"></td>
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
                </table>
                <tr>
                    <td class=""></td>
                    <td class="text-start">
                        <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
                        <button type="reset" class="btn btn-secondary" name="reset">Reset</button>
                    </td>
                </tr>
            </tr>
        </table>
    </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>