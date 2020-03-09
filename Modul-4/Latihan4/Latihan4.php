<?php
session_start();
if(isset($_SESSION["user"])){
    header ("location: beranda.php");
}
    include ("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
if(isset($_GET["error"])){
    if($_GET["error"]=="worng"){
        echo "<h3>username dan Password salah</h3>";
    }
}
if(isset($_GET["notif"])){
    if($_GET["notif"]=="logout"){
        echo "<h3>berhasil logouut</h3>";
    }
}
if(isset($_GET["error"])){
        echo do_login($_POST['username'], $_POST['password']);
}
    ?>
    <from action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    username: <input type="text" name ="username"><br >
    password: <input type="password" name ="password"><br >
    <input type="submit" name ="submit" value="SING IN";>
    </from>
</body>
</html>