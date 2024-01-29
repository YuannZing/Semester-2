<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>

</head>
<body>
    <form action="hasil.php" method="post" name="input">
        <center>

            <table>
                <tr>
                    <h1>PENDAFTARAN EKSTRAKURIKULER</h1><hr><br>
                </tr>
                <tr>

                    <table>
                        <tr>
                            <td><b>NIS</b></td>
                            <td>:</td>
                            <td><input type="text" name="nis"></td>
                        </tr>
                        <tr>
                            <td><b>Nama</b></td>
                            <td>:</td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td><b>Kelas</b></td>
                            <td>:</td>
                            <td><select name="kelas">
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><b>Tanggal Lahir</b></td>
                            <td>:</td>
                            <td><input type="date" name="date"></td>
                        </tr>
                        <tr>
                            <td><b>Alamat</b></td>
                            <td>:</td>
                            <td><textarea name="alamat" cols="40" rows="3"></textarea></td>
                        </tr>
                        <tr>
                            <td><b>Jenis Kelamin</b></td>
                            <td>:</td>
                            <td><input type="radio" name="kelamin" value="Laki-laki" checked>Laki-laki<input type="radio" name="kelamin" value="Perempuan">Perempuan</td>
                        </tr>
                        <tr>
                            <td><b>Hobby</b></td>
                            <td>:</td>
                            <td><input type="checkbox" name="hoby1" value ="Membaca">Membaca</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="checkbox" name="hoby2" value="Olahraga">Olahraga</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="checkbox" name="hoby3" value="Menyanyi">Menyanyi</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="checkbox" name="hoby4" value="Menari">Menari</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="checkbox" name="hoby5" value="Traveling">Traveling</td>
                        </tr>
                        <tr>
                            <td><b>Pilihan Ekskul</b></td>
                            <td>:</td>
                            <td><select name="ekskul[]" size="6" multiple>
                                <option value="pramuka">Pramuka</option>
                                <option value="basket">Basket</option>
                                <option value="volly">Volly</option>
                                <option value="band">Band</option>
                                <option value="senitari">Seni Tari</option>
                                <option value="robotic">Robotic</option>
                                <option value="bulutangkis">Bulu Tangkis</option>
                            </select></td>
                        </tr>
                    </table>
                </tr>
            </table>
            <br>
            <input type="submit" name="Kirim" value="Kirim">
            <input type="reset" name="cancel" value="Cancel">
        </center>
    </form>
</body>
</html>