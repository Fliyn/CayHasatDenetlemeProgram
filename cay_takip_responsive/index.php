<?php
      include ("conn/conn.php");
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap | Çay Takip</title>
    <link rel="shortcut icon" href="./images/logo.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./styles/register.css">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let x = document.querySelector('.load');
            x.classList.remove('load');
        });
    </script>
    <style>
        .popup{
            position:fixed;
            top:0;
            left:0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            display:flex;
            justify-content:center;
            align-items:center;
            opacity: 0;
            visibility:hidden;
        }
        .popup.open{
            opacity: 1;
            visibility: visible;
        }
        .message{
            position: relative;
            width: 500px;
            background: white;
            border-radius: 10px;
            padding: 1rem 3rem;
        }
        .close{
            position:absolute;
            top: 0px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body class="load">
    <main>
        <section class="container">
            <div class="img-box">
                <img src="./images/cay_takip_logo_shadowless.png" alt="logo">
                <img src="./images/cay_takip_text.png" alt="header">
            </div>
            <div class="entry-box">
                <input type="radio" name="control" id="label1">
                <input type="radio" name="control" id="label2">
                <div class="signup-box">
                    <div class="form-container">
                        <h2>Kayıt Ol</h2>
                        <form method="post" action="kayıtolsql.php"  method="POST" autocomplete="off">					
                            <div class="form-box"><input name="Eposta" type="email" placeholder="E-posta" pattern="^[a-z0-9]+@[a-z0-9]+.com$" required><i class="fas fa-envelope icon"></i></div>
                            <div class="form-box"><input name="İsim" type="text" placeholder="Kullanıcı Adı" required><i class="fas fa-user icon"></i></div>
                            <div class="form-box"><input name="Şifre" type="password" placeholder="Parola" required><i class="fas fa-lock icon"></i></div>
                            <div class="form-box"><input name="tel" type="tel" placeholder="telefon" required><i class="fas fa-phone icon"></i></div>
                            <div style="align-self: flex-end;">
                                <select class="select-box" name="Şehir" id="city">
                                    <option value="">İl Seçin</option>
                                    <option value="rize">Rize</option>
                                    <option value="trabzon">Trabzon</option>
                                    <option value="artvin">Artvin</option>
                                    <option value="giresun">Giresun</option>
                                    <option value="ordu">Ordu</option>
							    </select>
                                <select class="select-box" name="village" id="village">
                                    <option value="" selected>İlçe</option>
							    </select>
							</div>
                            <div class="form-check"><input name="sozlesme" type="checkbox" required><label for="" id="mes">Sözleşme şartlarını kabul ediyorum.</label></div>
							<button class="form-btn" type="submit">Kayıt Ol</button>
                            <p>Zaten hesabım var. <label for="label1">Giriş Yapın</label></p>
                        </form>
                    </div>	
                </div>
                <div class="signin-box">
                    <div class="form-container">
                        <h2>Giriş Yap</h2>
                        <form method="post" action="login.php" method="POST" autocomplete="off">
                            <div class="form-box"><input type="text" placeholder="Kullanıcı Adı" name="uname" required><i class="fas fa-user icon"></i></div>
                            <div class="form-box"><input type="password" placeholder="Parola" name="upass" required><i class="fas fa-lock icon"></i></div>
                            <button class="form-btn" type="submit">Giriş Yap</button>
                            <p>Hesabınız yok mu? <label for="label2">Hesap Oluşturun</label></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <div class="popup">
        <div class="message">
            <span class="close">x</span>
            <h2>Sözleşme</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, quidem debitis aperiam incidunt quam architecto veniam dignissimos assumenda aliquid? Quia temporibus ullam praesentium quos. Iure minima in nulla eos nesciunt!</p>
        </div>
    </div>
    <script>
        var city = document.getElementById("city");
        var village = document.getElementById("village");
        var mes = document.querySelector("#mes");
        var pop = document.querySelector(".popup");
        var close = document.querySelector(".close");

        city.addEventListener("change", function() {
            if (city.value == "rize") {
                var array = ["Çaybaşı", "Ortapazar", "Güneysu"];
            } else if (city.value == "trabzon") {
                var array = ["Sürmene", "Merkez", "Of"];
            } else if (city.value == "artvin") {
                var array = ["Şavşat", "Hopa", "Murgul"];
            }
            else if (city.value == "giresun") {
                var array = ["Bulancak", "Merkez", "Görele"];
            }
            else if (city.value == "ordu") {
                var array = ["Fatsa", "Çatalpınar", "Altınordu"];
            }
            var optn = "";
            var len = array.length;
            for (let i = 0; i < len; i++) {
                optn = optn + "<option value=" + array[i] + ">" + array[i] + "</option>";
            }
            village.innerHTML = optn;
        });

        mes.addEventListener("click", function(){
            pop.classList.add("open");
        });
        close.addEventListener("click", function(){
            pop.classList.remove("open");
        });

    </script>
</body>

</html>