<?php
session_start();
$hmm=$_SESSION["idKullanıcı"];
    include ("conn/conn.php");
    $bahçe=$_POST['bahçe'];
    mysqli_query($veri_yolu, "insert into bahçe (id,bahçe) Select '$hmm','$bahçe' Where not exists(select * from bahçe where bahçe='$bahçe' AND id='$hmm');");
    echo (" yılına $bahçe eklendi");
    header("location: ../home1.php");
?>