<?php
session_start();
$hmm=$_SESSION["idKullanıcı"];
    include ("conn/conn.php");
    $select=$_POST['select'];
	$sax1=$_POST['sax1'];
	$sax2=$_POST['sax2'];
	$sax3=$_POST['sax3'];
	$sax4=$_POST['sax4'];
	$sax5=$_POST['sax5'];
	$sax6=$_POST['sax6'];
	$sax7=$_POST['sax7'];
	$sax8=$_POST['sax8'];
	$sax9=$_POST['sax9'];
	$sax10=$_POST['sax10'];
	$sax11=$_POST['sax11'];
	 ?>
	 <table class="inner-table">
	 <?php
		  $result2 = mysqli_query($veri_yolu, "SHOW TABLES LIKE 'user_$hmm%';");
		  $i = 1;
		  		while($table = mysqli_fetch_array($result2)) {
				$result = mysqli_query($veri_yolu, "SELECT * FROM $table[0]");
				$rows2 = mysqli_fetch_all($result, MYSQLI_ASSOC);
		  foreach ($rows2 as $row){?>
		
          <tr>
		<?php
		if ($i<($select+1) and $i>($select-1)){
			$array= array(
			$row["yil"],$row["sezon"],$row["Bahce"],$row["Mevcutcay"],$row["Fabrika"],
			$row["Gelir"],$row["Gider"],$row["Harcamaisim"],$row["Vade_yılı"],
			$row["Vade_ayı"],$row["Açıklama"]);
		print_r($array[0]);print_r($array[1]);print_r($array[2]);print_r($array[3]);print_r($array[4]);print_r($array[5]);print_r($array[6]);print_r($array[7])
		;print_r($array[8]);print_r($array[9]);print_r($array[10]);};print $i;print $i;print $i;print $i;
		?>
			<td><?= $i++ ?></td>
          </tr>
		  
        <?php } } ?> </table><?php
				 print $i;print $select+1;print $select-1;
				$ver=$array[0];$ver1=$array[1];$ver2=$array[2];$ver3=$array[3];$ver4=$array[4];$ver5=$array[5];$ver6=$array[6];$ver7=$array[7];$ver8=$array[8];$ver9=$array[9];$ver10=$array[10];
		print $ver;print $sax1;print $sax2;print $sax3;print $sax4;print $sax5;print $sax6;print $sax7;print $sax8;print $sax9;print $sax10;print $sax11;
		$x=1;
		if($x=1){$para=($sax6*$sax4);
		mysqli_query($veri_yolu, "UPDATE user_$hmm$ver SET yil = '$sax1', sezon = '$sax2', Bahce = '$sax3', Mevcutcay = '$sax4', Fabrika = '$sax5', Gelir = '$para', Gider = '$sax7', Harcamaisim = '$sax8', Vade_yılı = '$sax9', Vade_ayı = '$sax10', Açıklama ='$sax11' 
		WHERE yil='$ver' And sezon='$ver1' And Bahce='$ver2' And Mevcutcay='$ver3' ;");
		}
		if($ver!=$sax1){
			mysqli_query($veri_yolu, "INSERT INTO user_$hmm$sax1 (yil, sezon, Bahce, Mevcutcay, Fabrika, Gelir, Gider, Harcamaisim, Vade_yılı, Vade_ayı, Açıklama) SELECT * FROM user_$hmm$ver WHERE yil=$sax1;");
			mysqli_query($veri_yolu,"DELETE FROM user_$hmm$ver WHERE yil=$sax1;");
			}
    
	echo ("Yıl Eklendi");print $sax3;
    //header("location: ../years.php");
?>