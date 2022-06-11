<?php
      
	   $server="localhost";
	   $s_kullanici_adi="root";
	   $s_kullanici_sifre="";
	   
	   $veri_tabani_adi="caytakip";
		
		
		
		$veri_yolu = mysqli_connect ($server, $s_kullanici_adi, $s_kullanici_sifre, $veri_tabani_adi);		
		//if ( ! $veri_yolu) die ("MySQL ile veri bağlantısı kurulamıyor!");
		
		//if (!$veri_yolu) {
			//die("Connection failed: " . 
		//mysqli_connect_error());
		//}
		//echo "Connected successfully";

		mysqli_query($veri_yolu, "SET Adi UTF8");
?>












