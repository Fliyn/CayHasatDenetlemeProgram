<?php
    include ("conn/conn.php");
	//$Firma=$_POST['Firma'];
	$fiyat=$_POST['fiyat'];
    mysqli_query($veri_yolu, "UPDATE firma SET Çfiyat=$fiyat WHERE firma='Çaykur';");
    header("location: ../home1.php");
?>