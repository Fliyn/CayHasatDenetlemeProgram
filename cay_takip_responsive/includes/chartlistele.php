<?php 
include ("conn/conn.php");
session_start();
$bang=$_SESSION["idKullanıcı"];
?>

<!doctype html>
<html lang="tr">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>İstatistik | Çay Takip</title>
      <link rel="shortcut icon" href="./images/logo.svg" type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
      <!-- <link rel="stylesheet" href="./styles/style.css"> -->
      <style>
          <?php include('../styles/style.css'); ?>

          html, .t-container{
            height: 100%;
          }
      </style>
  </head>
  <body class="t-container">
    <div class="hamburger-btn" id="toggle-btn">
      <a href="../chart.php"><i class="fas fa-arrow-left"></i></a>
    </div>
	  <div class="t-content">
		 <table class="inner-table">
			<tr>
			 <th>YIL</th>
			 <th>Sezon</th>
			 <th>Bahçe</th>
			 <th>Toplanan Miktar</th>
			 </tr>
			 
        <?php
          $yillar=$_POST['yillar'];
          $result = mysqli_query($veri_yolu, "SELECT sezon, Bahce, SUM(Mevcutcay) FROM user_$bang$yillar WHERE bahce IS NOT NULL GROUP BY sezon, Bahce order by sezon;");
          $mvctcy = mysqli_query($veri_yolu, "SELECT SUM(Mevcutcay) FROM yıl_2000 WHERE sezon=1;");

          $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
          foreach ($rows as $row){?>

          <tr>
            <td><?= $yillar ?></td>
            <td><?= $row["sezon"]  ?></td>
            <td><?= $row["Bahce"]  ?></td>
            <td><?= $row["SUM(Mevcutcay)"] ?></td>
          </tr>
        <?php } ?>
      
			</table>  

      <table class="inner-table">
        <tr>
          <th>YIL</th>
          <th>SEZON</th>
          <th>FABRİKA</th>
          <th>GELİR</th>
          <th>SATILAN KİLO</th>
        </tr>

        <?php
        $yillar=$_POST['yillar'];
        $result = mysqli_query($veri_yolu, "SELECT sezon, Fabrika, SUM(Gelir),SUM(Mevcutcay) FROM user_$bang$yillar WHERE Fabrika IS NOT NULL GROUP BY sezon, Fabrika ORDER by sezon;");
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($rows as $row){?>

        <tr>
          <td><?= $yillar ?></td>
          <td><?= $row["sezon"]  ?></td>
          <td><?= $row["Fabrika"]  ?></td>
          <td>₺<?= $row["SUM(Gelir)"]  ?></td>
          <td><?= $row["SUM(Mevcutcay)"]  ?></td>
        </tr>

        <?php } ?>

      </table> 

      <table class="inner-table">
        <tr>
          <th>YIL</th>
          <th>SEZON</th>
          <th>BAHCE</th>
          <th>HARCAMA TÜRÜ</th>
          <th>GİDER</th>
        </tr>

          <?php
          $yillar=$_POST['yillar'];
          $result = mysqli_query($veri_yolu, "SELECT * FROM user_$bang$yillar WHERE Harcamaisim IS NOT NULL order by sezon;");
          $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
          foreach ($rows as $row){?>

        <tr>
          <td><?= $yillar ?></td>
          <td><?= $row["sezon"]  ?></td>
          <td><?= $row["Bahce"]  ?></td>
          <td><?= $row["Harcamaisim"]  ?></td>
          <td>₺<?= $row["Gider"]  ?></td>
        </tr>

        <?php } ?>

      </table>  
		  </div>  
  </body>
</html>