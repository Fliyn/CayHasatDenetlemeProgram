<?php
    include ("conn/conn.php");
	$Kullanıcısil=$_POST['Kullanıcısil'];
    mysqli_query($veri_yolu, "DELETE FROM kullanıcı WHERE İsim='$Kullanıcısil';");
    header("location: ../home1.php");
?>