<?php
function luas_lingkaran($jari){
    return 3.14* $jari * $jari;
}
// Pangil alatnya
$r = 70;
echo "Luas Lingkaran dengan jari jari $r adalah = ";
echo luas_lingkaran($r);



function hed(){
    echo' 
    <link rel="stylesheet" type ="txt/css" href="style/style.css">
    <link rel="stylesheet" type ="txt/css" href="style/font-awesome.css">
    ';  
}
// Pemanggilan fungsi 
echo luas_lingkaran($r);
?>