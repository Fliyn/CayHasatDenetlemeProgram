<!DOCTYPE html>
<html lang="tr">
<?php
session_start();
$bang=$_SESSION["idKullanıcı"];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayarlar | Çay Takip</title>
    <link rel="shortcut icon" href="./images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./styles/style.css"> -->
    <style>
        <?php include('./styles/style.css'); ?>
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
            <div class="profile-box">
                <?php echo $_SESSION["İsim"]; ?>
            </div>
        </header>
        <main>
            <?php 
            
            $tab = @$_GET['tab'];
            switch ($tab) {
                case 'year':
                    include('./includes/year_add.php');
                    break;
                
                case 'garden':
                    include('./includes/garden_add.php');
                    break;

                case 'place':
                    include('./includes/firma_add.php');
                    break;
				case 'harcama':
                    include('./includes/harcama_add.php');
                    break;

                default:
                    include('./includes/year_add.php');
                    break;
            }
            
            ?>
            <div class="bottom-tab">
                <ul class="bottom">
                    <li class="bottom-link">
                        <a href="?tab=year" class="inner-link">
                            <span class="bottom-icon"><i class="far fa-calendar-plus"></i></span>
                            <span class="bottom-title">Yıl Ekle</span>
                        </a>
                    </li>
                    <li class="bottom-link">
                        <a href="?tab=garden" class="inner-link">
                            <span class="bottom-icon"><i class="fas fa-map-marked-alt"></i></span>
                            <span class="bottom-title">Bahçe Ekle</span>
                        </a>
                    </li>
                    <li class="bottom-link">
                        <a href="?tab=place" class="inner-link">
                            <span class="bottom-icon"><i class="fas fa-map-marked-alt"></i></span>
                            <span class="bottom-title">Satış Yeri</span>
                        </a>
                    </li>
					<li class="bottom-link">
                        <a href="?tab=harcama" class="inner-link">
                            <span class="bottom-icon"><i class="fas fa-map-marked-alt"></i></span>
                            <span class="bottom-title">Harcama Türü</span>
                        </a>
                    </li>
                </ul>
            </div>
        </main>
        <img src="./images/abstract-wave.svg" alt="wave" class="wave">
        <div id="alpha"></div>
    </div>
    <script src="./js/app.js"></script>
</body>

</html>