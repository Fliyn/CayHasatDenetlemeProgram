<?php
	include ("conn/conn.php");
	$İsim=$_POST['İsim'];
	$Eposta=$_POST['Eposta'];
	$Şifre=$_POST['Şifre'];
	$Şehir=$_POST['Şehir'];
	$tel=$_POST['tel'];
	$village=$_POST['village'];
	mysqli_query($veri_yolu, "INSERT INTO kullanıcı (İsim, Eposta, Şifre, Şehir,köy, Telefon) VALUES ('$İsim','$Eposta','$Şifre','$Şehir','$village','$tel')");
	echo ("kayıt işleminiz başarı ile gerçekleşmiştir.");
	header('location: ./index.php');
?>