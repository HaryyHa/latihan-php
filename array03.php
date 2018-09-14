<?php
$arrwarna = array ("Blue","Black","Red","Yellow","Green");

echo "Menampilkan isi Array dengan for : <br>";
for ($i=0; $i<count($arrwarna); $i++){
    echo "Do You Like<font color = $arrwarna [$i]>". $arrwarna[$i]"</font> ?<br>";
}

echo "<br> Menampilkan isi Array dengan foreach : <br>";
foreach ($arrwarna as $warna) {
    echo "Do You Like <font color = $warna>". $warna . "</font> ?<br>";
}
?>