<?php
$tahun = date ("Y");
$kabisat = ($tahun%4 == 0) ? "KABISAT" : "Bukan Kabisat";
echo "tahun <b> $tahun</b> $kabisat";