<?php
include ("conn/conn.php");
session_start();
$bang=$_SESSION["idKullanıcı"];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesajlar | Çay Takip</title>
    <link rel="shortcut icon" href="./images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./styles/style.css"> -->
    <style>
        <?php include('./styles/style.css'); ?>
        table.gridtable2 {
            border-collapse: collapse;
            background: #096E3B;
            font-size: 15px;
        }
        table.gridtable2 th {
            padding: 8px;
            background-color: rgba(255, 255, 255, 0.5);
        }
        table.gridtable2 td {
            padding: 8px;
        }
        .list-btn{
           padding: 5px 10px;
           border-radius: 5px;
        }
        .welcome-user{
            color: #eee;
        }
    </style>
</head>

<body id="myBody">
    <div class="container">
        <nav class="nav-bar" id="navbar">
            <ul>
                <li>
                    <img src="./images/logo.svg" alt="logo" width="60px">
                </li>
                <li>
                    <a href="./home1.php">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title">Anasayfa</span>
                    </a>
                </li>
                <li>
                    <a href="./chart.php">
                        <span class="icon"><i class="fas fa-chart-pie"></i></span>
                        <span class="title">İstatistik</span>
                    </a>
                </li>
				<li>
                    <a href="./Mesajlar.php">
                        <span class="icon"><i class="fas fa-envelope-open-text"></i></span>
                        <span class="title">Mesajlar</span>
                    </a>
                </li>
                <li>
                    <a href="./years.php">
                        <span class="icon"><i class="fas fa-user-cog"></i></span>
                        <span class="title">Ayarlar</span>
                    </a>
                </li>
                <li>
                    <a href="./includes/logout.php">
                        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="title">Çıkış Yap</span>
                    </a>
                </li>
            </ul>
        </nav>
        <header>
            <div class="hamburger-btn" id="toggle-btn">
                <i class="fas fa-bars"></i>
            </div>
			<h1 class="welcome-user">HOŞGELDİN <?php echo $_SESSION["İsim"]; ?></h1>
            <div class="profile-box">
                <?php echo $_SESSION["İsim"]; ?>
            </div>
        </header>
        <main>
            <form method="POST" id="statistic-form">
            <button type="submit" class="list-btn" formaction="includes/msil.php">Mesajları Temizle</button>
                        <?php
                        $result = mysqli_query($veri_yolu,"SELECT * FROM mesajlar Where id='$bang'");
                        
                        echo "<table class='gridtable2'>
                        <tr><th>MESAJLAR</th></tr>
                        <tr>
                        <th>#</th>
                        <th>Gönderen</th>
                        <th>Mesaj</th>
                        </tr>";
                        $i = 1;
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>" . $row['Gönderen'] . "</td>";
                            echo "<td>" . $row['GönderilmişOlan'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
        ?>
        <button type="submit" class="list-btn" formaction="includes/Listedit.php">SON DÖKÜMLERİ LİSTELE</button>
		</form>
        </main>
        <img src="./images/abstract-wave.svg" alt="wave" class="wave">
        <div id="alpha"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>