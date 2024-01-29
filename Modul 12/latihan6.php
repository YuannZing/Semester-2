<?php 
echo "<h1>Konversi Type Data</h1><br>";
$bayar = "500.77 Rupiah";
echo "Tipe Data String : $bayar <br>";
settype($bayar,"double");
echo "Tipe Data Double : $bayar <br>";
settype($bayar,"integer");
echo "Tipe Data Integer : $bayar <br>";
?>