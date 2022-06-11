<form action="./includes/home2sql.php" method="POST">
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
<select class="select-box" name="firma" id="">
    <?php
        include ("conn/conn.php");
        $vix=mysqli_query($veri_yolu, "SELECT firma FROM firma WHERE id=$bang OR id=0;");
        while($cex = mysqli_fetch_array($vix)) {echo "<option> $cex[0] </option>";};
    ?>
</select>
<select class="select-box" name="bahçe">
        <?php
            include ("conn/conn.php");
            $chee=mysqli_query($veri_yolu, "SELECT bahçe FROM bahçe WHERE id=$bang;");
            while($tabee = mysqli_fetch_array($chee)) {echo "<option> $tabee[0] </option>";};
        ?>
    </select>
<input type="checkbox" id="input-btn">
<label id="dis" for="input-btn">Vadeli İşlem</label>

<select class="select-box hidden-box" name="Vade_yılı">
    <option value="0" selected>Vade Yılı</option>
    <?php 
    $number;
    for($number = 2000; $number <= 2100; $number++)
    {
        echo '<option>'.$number.'</option>';
    }
    ?>
</select>
<select class="select-box hidden-box" name="Vade_ayı">
    <option value="0" selected>Ay Seç</option>
    <?php 
    $value = 0;
    $mon = array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
    foreach ($mon as $show) {
        echo '<option value = '.$value++.'>'.$show.'</option>';
    }
    ?>
</select>
<div class="price-box">
    <input type="number" name="Gelir" value=<?php $cke=mysqli_query($veri_yolu, "SELECT Çfiyat FROM firma WHERE firma='Çaykur';"); $paw = mysqli_fetch_array($cke); echo $paw['0'];?>>
</div>
<div class="tea-input">
    <input type="number" name="mevcutcay" placeholder="Çay(Kg)">
</div>
<textarea name="ozelaciklama" id="" class="d-input" placeholder="Açıklama..."></textarea>
<div class="insert-btn">
    <button type="submit" class="insert">Satış Ekle</button>
</div>
</form>