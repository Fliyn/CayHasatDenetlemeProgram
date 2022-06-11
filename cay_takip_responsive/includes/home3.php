<form action="includes/home3sql.php" method="POST">
    <select class="select-box" name="yillar">
        <?php
            include ("conn/conn.php");
            $cho=mysqli_query($veri_yolu, "SHOW TABLES LIKE 'user_$bang%';");
            while($table = mysqli_fetch_array($cho)) {
				$newstring = substr($table[0], -4);
				echo "<option> $newstring </option>";};
        ?>
    </select>
    <select class="select-box" name="sürgün">
        <option value="1">1.Sürgün</option>
        <option value="2">2.Sürgün</option>
        <option value="3">3.Sürgün</option>
        <option value="4">4.Sürgün</option>
    </select>
    <select class="select-box" name="bahçe">
        <?php
            include ("conn/conn.php");
            $chee=mysqli_query($veri_yolu, "SELECT bahçe FROM bahçe WHERE id=$bang;");
            while($tabee = mysqli_fetch_array($chee)) {echo "<option> $tabee[0] </option>";};
        ?>
    </select>
        <select class="select-box" name="Harcamaisim" id="">
            <option value="0" selected>Harcama Türü</option>
		<?php
            include ("conn/conn.php");
            $vexx=mysqli_query($veri_yolu, "SELECT harcamatürleri FROM harcamatürleri WHERE id=$bang;");
            while($caree = mysqli_fetch_array($vexx)) {echo "<option> $caree[0] </option>";};
        ?>
        </select>
        <textarea name="ozelaciklama" id="" class="d-input" placeholder="Açıklama..."></textarea>
    <div class="kind-box">
        <input type="number" name="Gider" placeholder="Harcama Miktarı(₺)">
    </div>
    <div class="spending-btn">
        <button class="spending">Harcama Ekle</button>
    </div>
</form>