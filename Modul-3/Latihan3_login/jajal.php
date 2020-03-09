<?php
$benar = "<h1><font color= Green <h1>Mantep Slurrr";
$kosong = "<h1><font color= blue <h1>Harap di lengkapi dulu slur";
$salah = "<h1><font color= red <h1>Salah Slur Ulangi neh slurr";
if (isset($_POST["Login"])){

    if ($_POST["username"]=="rendi" && $_POST["password"]=="123"){
        echo $benar;
    } else if($_POST["username"]=="" || $_POST["password"]==""){
        echo $kosong;
    }else{
        echo $salah;
    }
}
?>
