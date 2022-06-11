<?php
session_start();
$hmm=$_SESSION["idKullanıcı"];
    include ("conn/conn.php");
    $yil=$_GET['yil'];
    mysqli_query($veri_yolu, "Create Table user_$hmm$yil (yil int(90),Mevcutcay int(90) NULL , sezon int(90),
    Bahce VARCHAR(255), Fabrika VARCHAR(255), Gelir int(90), Gider int(90), Harcamaisim VARCHAR(255), Vade_yılı int(90) ,Vade_ayı VARCHAR(255) ,Açıklama VARCHAR(255));");
	mysqli_query($veri_yolu, "INSERT INTO user_$hmm(yil) VALUES ('$yil');");
    echo ("Yıl Eklendi");
    header("location: ../years.php");
?>