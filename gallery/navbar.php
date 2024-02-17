<?php
session_start();
if(!isset($_SESSION['UserID'])){
    header("location:login.php");}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <ul class="navbar">
    <button><a href="home.php">BERANDA</a></button>
    <button><a href="album.php">ALBUM</a></button>
    <button><a href="foto.php">FOTO</a></button>
    <button><a href="Logout.php">LOGOUT</a></button>
    </ul></table>
    <marquee class="marquee">Selamat Datang <b><?=$_SESSION['NamaLengkap']?></b></marquee>
</body>
</html>