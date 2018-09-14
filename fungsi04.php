<?php 
function tambah_string ($str) { 
    $str = $str . ", Bandung";  
    return $str; } 
     // 
    $str = "Universitas Islam Negri";
    echo "\$str = $str<br>"; 
    echo tambah_string ($str). "<br>"; 
    echo "\$str = $str<br>";
?> 