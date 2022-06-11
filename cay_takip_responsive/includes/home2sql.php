<?php
    include ("conn/conn.php");
    session_start();
    $hmm=$_SESSION["idKullanıcı"];
    $yillar=$_POST['yillar'];
    $firma=$_POST['firma'];
    $sürgün=$_POST['sürgün'];
    $Gelir=$_POST['Gelir'];
	$bahçe=$_POST['bahçe'];
    $mevcutcay=$_POST['mevcutcay'];
    $Vade_yılı=$_POST['Vade_yılı'];
    $Vade_ayı=$_POST['Vade_ayı'];
	$ozelaciklama=$_POST['ozelaciklama'];
	$Katmagelir=$Gelir * $mevcutcay;
    if($Vade_ayı>0){mysqli_query($veri_yolu, "INSERT INTO mesajlar (id,Bekleyen,Gönderen,GönderilmişOlan) VALUES ($hmm,1,'Sistem','Vade Alınacak Yıl:$Vade_yılı  Ay:$Vade_ayı');");}
    mysqli_query($veri_yolu, "INSERT INTO user_$hmm$yillar (yil,Fabrika,sezon,Bahce,Gelir,Mevcutcay,Vade_yılı,Vade_ayı,Açıklama) VALUES ('$yillar','$firma','$sürgün','$bahçe','$Katmagelir','$mevcutcay','$Vade_yılı','$Vade_ayı','$ozelaciklama');");
    header("location: ../home1.php");
?>