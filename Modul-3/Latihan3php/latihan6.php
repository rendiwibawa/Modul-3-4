<?php
$tahun = date("Y");
$kabisat = ($tahun%4==0) ? "KABISAT" : "Bukan KABISAT";
echo "Sekarang adalah tahun <b>$kabisat</b>";
?>