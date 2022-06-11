<?php
    include ("conn/conn.php");
	$ozelaciklama=$_POST['ozelaciklama'];
	$Kullanıcıisim=$_POST['Kullanıcıisim'];
	$cke=mysqli_query($veri_yolu, "SELECT idKullanıcı FROM kullanıcı WHERE İsim='$Kullanıcıisim';");
	$paw = mysqli_fetch_array($cke);
    mysqli_query($veri_yolu, "INSERT INTO mesajlar (id,GönderilmişOlan,Gönderen) VALUES ('$paw[0]','$ozelaciklama','Admin');");
    header("location: ../home1.php");
?>