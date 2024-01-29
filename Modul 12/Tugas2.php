<?php 
$a = 5;
$b = 8;
$c = 10;
$Lsegitiga = 0.5 * $a * $b;
$Ksegitiga = $a + $b + $c;
$Lpersegi = pow($a,2); 
$Kpersegi = 4 * $a;
$LPpanjang = $a * $b;
$KPpanjang = 2 * ($a + $b);
$Llingkaran = 3.14 * pow($a, 2);
$Klingkaran = 3.14 * 2 * $a;

echo "Luas segitiga adalah $Lsegitiga<br>";
echo "Keliling segitiga adalah $Ksegitiga<br>";
echo "Luas persegi adalah $Lpersegi<br>";
echo "Keliling persegi adalah $Kpersegi<br>";
echo "Luas persegi panjang adalah $LPpanjang<br>";
echo "Keliling persegi panjang adalah $KPpanjang<br>";
echo "Luas lingkaran adalah $Llingkaran<br>";
echo "Keliling lingkaran adalah $Klingkaran<br>";
?>

