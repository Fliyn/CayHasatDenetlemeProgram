<?php
session_start();
$hmm=$_SESSION["idKullanıcı"];
    include ("conn/conn.php");
    $harcamatürleri=$_POST['harcamatürleri'];
    mysqli_query($veri_yolu, "insert into harcamatürleri (id,harcamatürleri) Select '$hmm','$harcamatürleri' Where not exists(select * from harcamatürleri where harcamatürleri='$harcamatürleri' AND id='$hmm');");
    echo (" yılına $bahçe eklendi");
    header("location: ../home1.php");
?>