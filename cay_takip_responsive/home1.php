<?php
include  ("conn/conn.php");
session_start();
$bang=$_SESSION["idKullanıcı"];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa | Çay Takip</title>
    <link rel="shortcut icon" href="./images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./styles/style.css"> -->
    <style>
        <?php include('./styles/style.css'); ?>
    </style>
    <style>
      table.gridtable {
        border-collapse: collapse;
        background: #00818A;
        font-size: 15px;
       }
      table.gridtable th {
         padding: 8px;
         background-color: rgba(255, 255, 255, 0.5);
       }
     table.gridtable td {
         padding: 8px;
         background-color: rgba(255, 255, 255, 0.8);
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
            <div class="profile-box">
			<?php echo $_SESSION["İsim"]; ?>
            </div>
        </header>
        <main>
            <?php
                $mtab = @$_GET['mtab'];
                switch ($mtab) {
                    case 'l1':
                        include('./includes/home2.php');
                        break;
                    case 'l2':
                        include('./includes/home3.php');
                        break;
                    case 'l3':
                        include('./includes/Admin.php');
                        break;
                    default:
                        include('./includes/home2.php');
                        break;
                }

            ?>          
        </main>
            <div class="operation-btn">
                <a href="?mtab=l1">Satış Yap</a>
                <a href="?mtab=l2">Harcama</a>
				<?php
				$cke=mysqli_query($veri_yolu, "SELECT idKullanıcı=$bang FROM kullanıcı WHERE Admin>0;");
				$paw = mysqli_fetch_array($cke);
					if($paw[0]>0){echo '<a href="?mtab=l3">Admin</a>';}
                    
				?>
            </div>
        <img src="./images/abstract-wave.svg" alt="wave" class="wave">
        <div id="alpha"></div>
    </div>
    <script src="./js/app.js"></script>
</body>

</html>