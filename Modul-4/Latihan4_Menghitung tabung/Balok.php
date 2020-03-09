<?php
function luas_tabung($r,$t){
    return 2*3.14*$r*($r+$t);
}
function volume_tabung($r,$t){
    return 3.14*$r*$t;
}
// memanggil luas tabung
$rr= $_POST["jari"];
$tt= $_POST["tinggi"];
if ($_POST["submit"] == "Luas Tabung"){
echo "<h1>luas permukaan tabung dengan jari-jari $rr cm dan tinggi $tt cm adalah = ";
echo luas_tabung($rr,$tt)." cm";
}
// volume tabung
else if($_POST["submit"] == "Volume tabung"){
echo "<br><h1>Volume tabung dengan jari-jari $rr cm dan tinggi $tt cm adalah = ";
echo volume_tabung($rr,$tt)." cm";
}
?>
