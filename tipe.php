<?php
$nim = "0411500400";
$nama = 'Eveline';
$umur = 17;
$nilai = 82.25;
$status = true;
echo "NIM : " . $nim . "<br>";
echo "Nama ; $nama<br>";
print "Umur : " . $umur;
print "<br>";
printf("Nilai : %.2f<br>" , $nilai);
if ($status) {
    echo "Status : AKtif";
} else{
    echo "Status : Tidak Aktif";
}