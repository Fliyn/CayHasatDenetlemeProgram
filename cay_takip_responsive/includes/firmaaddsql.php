<?php
session_start();
$hmm=$_SESSION["idKullanıcı"];
    include ("conn/conn.php");
    $firma=$_POST['firma'];
    mysqli_query($veri_yolu, "insert into firma (id,firma) Select '$hmm','$firma' Where not exists(select * from firma where firma='$firma' AND id='$hmm');");
    echo (" yılına $bahçe eklendi");
    header("location: ../home1.php");
?>