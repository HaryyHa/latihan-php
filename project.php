<?php
$uang = 50000;
$Makanan = 25000;
$minuman = 10000;
$sisa = ($uang - 50000 -10000);
 echo "hari mempunyai uang Rp.$uang <br>";
 echo "Makanan : Rp.$Makanan <br>";
 echo "minuman : Rp.$minuman <br>";
if ($sisa >=1) {
    echo "lalu di jajankan makanan dan minuman dan sisa uang hari tinggal Rp.$sisa <br>";
    echo "Hary tidak boros <br>";
} else if($sisa <0)  {
    echo "lalu di jajankan makanan dan minuman dan sisa uang hari tinggal Rp.$sisa <br>";
    echo "Hari Boros";
}
?>