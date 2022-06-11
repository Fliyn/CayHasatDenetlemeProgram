<?php
session_start();
$hmm=$_SESSION["idKullanıcı"];
    include ("conn/conn.php");
    $yillar=$_POST['yillar'];
    $sürgün=$_POST['sürgün'];
    $bahçe=$_POST['bahçe'];
    $Harcamaisim=$_POST['Harcamaisim'];
    $Gider=$_POST['Gider'];
	$ozelaciklama=$_POST['ozelaciklama'];
    mysqli_query($veri_yolu, "INSERT INTO user_$hmm$yillar (yil,sezon,Bahce,Harcamaisim,Gider,Açıklama) VALUES ('$yillar','$sürgün','$bahçe','$Harcamaisim','$Gider','$ozelaciklama');");
    echo (" yılına $Harcamaisim eklendi");
    header("location: ../home1.php");
?>