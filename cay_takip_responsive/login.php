<?php
session_start();
    include ("conn/conn.php");
    $uname=$_POST['uname'];
    $upass=$_POST['upass'];
    $power=mysqli_query($veri_yolu, "SELECT idKullanıcı FROM kullanıcı WHERE İsim='$uname' and Şifre='$upass'");
	$sessss=mysqli_query($veri_yolu, "SELECT * FROM kullanıcı WHERE İsim='$uname' and Şifre='$upass'");
	$ruw=mysqli_fetch_array($power);
	$sessionnes=mysqli_fetch_array($sessss);
    $row=mysqli_fetch_array($power,MYSQLI_ASSOC);
    if(mysqli_num_rows($power) == 1)
    {
    $_SESSION['idKullanıcı'] = $ruw['idKullanıcı'];
	$_SESSION["İsim"] = $sessionnes['İsim'];
    header("location: home1.php");
    }else
    {
    echo '
    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Giriş Yap | Çay Takip</title>
        <link rel="shortcut icon" href="./images/logo.svg" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <style>
            .failed {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 300px;
                height: 300px;
                background: white;
                border-radius: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                font-family: Poppins;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            }
            .failed p a {
                margin-left: 5px;
            }
        </style>
    </head>
    <body style="min-height: 100vh; background: #1c92d2; overflow: hidden;">
        <div class="failed">
            <h2>Giriş Başarısız Oldu!</h2>
            <p>Giriş Yap Sayfasına<a href="./index.php">Geri Dön</a></p>
        </div>
    </body>
    </html>
    ';
    }
?>