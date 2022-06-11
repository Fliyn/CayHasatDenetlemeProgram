<?php
    include ("conn/conn.php");
    session_start();
	$bang=$_SESSION["idKullanıcı"];
    mysqli_query($veri_yolu, "DELETE FROM mesajlar WHERE id=$bang;");
    header("location: ../Mesajlar.php");
?>