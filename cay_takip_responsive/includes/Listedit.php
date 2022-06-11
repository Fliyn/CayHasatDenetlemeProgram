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
  <body class="t-container-admin">
    <div class="hamburger-btn" id="toggle-btn">
      <a href="../chart.php"><i class="fas fa-arrow-left"></i></a>
    <form action="Lisetedditsql.php" method="POST">
	</div>
	  <div class="t-content-admin">
		 <table class="inner-table-admin">
			 <th>#</th>
			 <th>YIL</th>
			 <th>Sezon</th>
			 <th>Bahçe</th>
			 <th>Çay(kg) Miktar</th>
			 <th>Fabrika</th>
			 <th>Gelir(₺)</th>
			 <th>Gider(₺)</th>
			 <th>Harcama İsim</th>
			 <th>Vade_yılı</th>
			 <th>Vade_ayı</th>
			 <th>Özel_Açıklama</th>
			 </tr>
			 <tr class="flex-tr">
			<td>
				<select name="select" class="select-id">
				<option value="">#</option>
					<?php
						include ("conn/conn.php");
						$i = 0;
						$result2 = mysqli_query($veri_yolu, "SHOW TABLES LIKE 'user_$bang%';");
						while($table = mysqli_fetch_array($result2)) {
						$result = mysqli_query($veri_yolu, "SELECT * FROM $table[0]");
						$rows2 = mysqli_fetch_all($result, MYSQLI_ASSOC);
						foreach ($rows2 as $row){$i++; echo "<option>$i</option>";
					}} ?>
				</select>
			</td>
			 <td class="flex-td"></divclass=>
			 <select class="select-box" name="sax1">
        <?php
            include ("conn/conn.php");
            $cho=mysqli_query($veri_yolu, "SHOW TABLES LIKE 'user_$bang%';");
            while($table = mysqli_fetch_array($cho)) {
				$newstring = substr($table[0], -4);
				echo "<option value='$newstring'> $newstring </option>";};
        ?>
			</select>
			 </td>
			 <td 
			 class="flex-td">
			 <select class="select-box" name="sax2">
				<option value="1">1.Sürgün</option>
				<option value="2">2.Sürgün</option>
				<option value="3">3.Sürgün</option>
				<option value="4">4.Sürgün</option>
			</select>
			</td>
			 <td 
			 class="flex-td">
			<select class="select-box" name="sax3">
				<?php
					include ("conn/conn.php");
					$chee=mysqli_query($veri_yolu, "SELECT bahçe FROM bahçe WHERE id=$bang;");
					while($tabee = mysqli_fetch_array($chee)) {echo "<option value='$tabee[0]'> $tabee[0] </option>";};
				?>
			</select>
			</td>
			 <td class="flex-td"><div class="edit-box"><input type="number" name="sax4" placeholder=0></div></td>
			 <td class="flex-td">
			<select class="select-box" name="sax5">
				<?php
					include ("conn/conn.php");
					$vix=mysqli_query($veri_yolu, "SELECT firma FROM firma WHERE id=$bang OR id=0;");
					while($cex = mysqli_fetch_array($vix)) {echo "<option value='$cex[0]'> $cex[0] </option>";};
				?>
			</select>
			</td>
			 <td class="flex-td"><div class="edit-box"><input type="number" name="sax6" placeholder=0></div></td>
			 <td class="flex-td"><div class="edit-box"><input type="number" name="sax7" placeholder=0></div></td>
			 <td class="flex-td">       
				<select class="select-box" name="sax8">
				<option value="0" selected>Harcama Türü</option>
				<?php
					include ("conn/conn.php");
					$vexx=mysqli_query($veri_yolu, "SELECT harcamatürleri FROM harcamatürleri WHERE id=$bang;");
					while($caree = mysqli_fetch_array($vexx)) {echo "<option value='$caree[0]'> $caree[0] </option>";};
				?>
				</select>
				</td>
			 <td class="flex-td"><div class="edit-box"><input type="number" name="sax9" placeholder=0></div></td>
			 <td class="flex-td">
			 <select class="select-box hidden-box" name="sax10">
    <option value="0" selected>Ay Seç</option>
    <?php 
    $value = 1;
    $mon = array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
    foreach ($mon as $show) {
        echo '<option value = '.$value++.'>'.$show.'</option>';
    }
    ?>
</select></td>
			 <td class="flex-td"><div class="edit-box"><input type="" name="sax11" placeholder="Özel_Açıklama"></div></td>
			</tr>
 
        <?php
          //$yillar=$_POST['yillar'];SHOW TABLES LIKE 'user_15%';
          //$result = mysqli_query($veri_yolu, "SELECT * FROM user_$bang");
		  $result2 = mysqli_query($veri_yolu, "SHOW TABLES LIKE 'user_$bang%';");
          //$mvctcy = mysqli_query($veri_yolu, "SELECT SUM(Mevcutcay) FROM yıl_2000 WHERE sezon=1;");
          //$rows = mysqli_fetch_all($result2, MYSQLI_ASSOC);
		  $i = 1;
		  		while($table = mysqli_fetch_array($result2)) {
				//$newstring = substr($table[0]);
				//echo $result2;}
				$result = mysqli_query($veri_yolu, "SELECT * FROM $table[0]");
				$rows2 = mysqli_fetch_all($result, MYSQLI_ASSOC);
		  foreach ($rows2 as $row){?>
		
          <tr>
		<?php
		if ($i<(4) and $i>(2)){
			$array= array(
			$row["yil"],$row["sezon"],$row["Bahce"],$row["Mevcutcay"],$row["Fabrika"],
			$row["Gelir"],$row["Gider"],$row["Harcamaisim"],$row["Vade_yılı"],
			$row["Vade_ayı"],$row["Açıklama"]);

			};
		?>
			<td><?= $i++ ?></td>
            <td><?= $row["yil"] ?></td>
            <td><?= $row["sezon"]  ?></td>
            <td><?= $row["Bahce"]  ?></td>
            <td><?= $row["Mevcutcay"] ?></td>
			<td><?= $row["Fabrika"] ?></td>
			<td><?= $row["Gelir"] ?></td>
			<td><?= $row["Gider"] ?></td>
			<td><?= $row["Harcamaisim"] ?></td>
			<td><?= $row["Vade_yılı"] ?></td>
			<td><?= $row["Vade_ayı"] ?></td>
			<td><?= $row["Açıklama"] ?></td>
          </tr>
		  
        <?php } } ?>

      </table>  
		  </div>  
	<div class="edit-btn">
        <button>Güncelle</button>
    </div>
	</form>
  </body>
</html>