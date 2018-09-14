<?php
function luas_persegi_panjang ($panjang, $lebar) {
    return $panjang * $lebar;
}
    
    $p = 20;
    $l = 10;
    echo "<b>Luas Persegi Panjang $p x $l : </b>";
    echo luas_persegi_panjang ($p, $l);
    echo "<br>"; 




function luas_segitiga ($sisi,$susu) {
    return  1/2 * $sisi * $susu;
}
    $m = 5;
    $i = 10;
    echo "<b> Luas Segitiga dengan Alas $m dan $i : </b>";
    echo luas_segitiga ($m, $i);
?>