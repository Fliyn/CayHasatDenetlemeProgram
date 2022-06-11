<form method="POST">
    <select class="select-box" name="Kullanıcıisim">
		<option value="0" selected>Kullanıcı ismi seçin</option>
        <?php
            $chee=mysqli_query($veri_yolu, "SELECT İsim,Şehir,köy FROM kullanıcı;");
            while($tabee = mysqli_fetch_array($chee)) {echo "<option>   $tabee[0]     >  Bulunduğu yer  >   $tabee[1]/$tabee[2] </option>";};
        ?>
    </select>
	<textarea name="ozelaciklama" id="" class="d-input" placeholder="Gönderilecek olan mesaj..."></textarea>
    <div class="insert-btn">
        <button class="insert" formaction="includes/ADMİN1.php">Mesaj Gönder</button>
    </div>
    
	
<select class="select-box" name="Firma">
		<option value="Çaykur" selected>Çaykur Fiyat Güncelle</option>
        <?php
            $chee=mysqli_query($veri_yolu, "SELECT firma=Çaykur FROM firma;");
        ?>
    </select>
	    <div class="kind-box">
        <input type="number" step="any" name="fiyat" placeholder="Güncellenecek fiyatı giriniz(₺)">
		</div>
    <div class="insert-btn">
        <button class="insert" formaction="includes/ADMİN2.php">Fiyatı güncelle</button>
    </div>
        <?php
            $result = mysqli_query($veri_yolu,"SELECT * FROM kullanıcı");
            
            echo "<table class='gridtable'>
            <tr>
            <th>İsim</th>
            <th>E-posta</th>
            <th>Şehir</th>
            <th>Telefon</th>
            </tr>";
            
            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo "<td>" . $row['İsim'] . "</td>";
            echo "<td>" . $row['Eposta'] . "</td>";
            echo "<td>" . $row['Şehir'] . "</td>";
            echo "<td>" . $row['Telefon'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
        ?>
    <select class="select-box" name="Kullanıcısil">
		<option value="Çaykur" selected>Silinecek Olan Kullanıcıyı Seçin</option>
        <?php
            $tvv=mysqli_query($veri_yolu, "SELECT İsim FROM kullanıcı;");
			while($teseart = mysqli_fetch_array($tvv)) {echo "<option> $teseart[0] </option>";};
        ?>
    </select>
    <div class="insert-btn">
        <button class="insert" formaction="includes/ADMİN3.php">Kullanıcıyı Sil</button>
    </div>
<form>
