<?php 
include "config.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Motive8Now</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Montserrat:400,600" rel="stylesheet">
        <title> Anasayfa</title>
        <style>
            body {
                background: linear-gradient(to right, #FFE1C2, #FFB1F1);
                background-color: #eeaace;
                /* Geçişin en solunda kalan rengi */

                /*font-family: Arial, Helvetica, sans-serif;*/
                font-family: 'Open Sans', sans-serif;
            }

            h1,
            h2,
            h3 {
                font-family: 'Montserrat', sans-serif;
            }

            .container {
                width: 50%;
                margin: 0 auto;
                margin-top: 30px;
                background-color: #F6B5D8;
                border: 0px solid #8fa9bb2c;
                border-radius: 20px;
                padding: 20px;
                /* background-image: url('https://i.pinimg.com/564x/79/ba/4b/79ba4b74eb8fa56cfc9a3c3f2387ae47.jpg');*/
                background-size: cover;
                color: #474747;


                /* max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                text-align: center;*/
            }
            .logo {
                /* background-color: #f2f2f2;*/
                padding: 10px;
                text-align: center;
            }

            .logo h1 {
                margin: 9px;
            }

            .logo p {
                margin: 0;
                font-size: 18px;
            }

            .logo-container {
                background-color: transparent;
                /* arkasındaki boyalı alanı kaldırır */
            }


            .menu {
                background-color: #e2b1c7;
                padding: 10px;
                /*border-bottom: 2px solid #9FA5C8;*/
                text-align: center;
                margin-top: 20px
            }

            .menu ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                display: inline-block;
            }

            .menu li {
                display: inline-block;
                margin: 0 10px;
            }

            .menu li a {
                display: block;
                color: #333;
                font-size: 16px;
                text-decoration: none;
                padding: 10px;
            }

            .menu li a:hover {
                background-color: #f5e9f0;
            }

            .card {
                display: inline-block;
                margin: 20px;
                border: 1px solid #ddd;
                border-radius: 5px;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
                width: 285px;
                text-align: center;
            }

            .card img {
                width: 100%;
                height: 200px;
                object-fit: cover;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }

            .card h2 {
                font-size: 1.5rem;
                margin-top: 10px;
            }

            .card p {
                margin-top: 10px;
                font-style: italic;
            }

            button {
                margin-top: 10px;
                background-color: #eb74c3;
                color: white;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                cursor: pointer;
            }

            button:hover {
                background-color: #838182;
            }
        </style>
    </head>

    <body>
        <header>
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Anasayfa</a></li>
                    <li><a href="hakkımızda.php">Hakkımızda</a></li>
                    <li><a href="alintilar.php">Motivasyonel Alıntılar</a></li>
                    <li><a href="galeri.php">Galeri</a></li>
                    <li><a href="uzmanlarimiz.php">Uzmanlarımız</a></li>
                    <li><a href="iletisim.php">İletişim</a></li>
                    <li><a href="randevu.php">Randevu Al</a></li>
                    <?php 
                        if (isset($_SESSION["id"]) && $_SESSION["id"] > 0)
                        {
                        ?>
                            <li><a href="randevu_duzen.php" >Randevu Bilgiler / Düzenleme</a></li>
                            <li><a href="profile.php" >Profili Düzenle</a></li>
                            <li><a href="logout.php">Çıkış Yap (#<?php echo $_SESSION["id"]; ?>)</a></li>
                        <?php
                        }
                        else
                        {
                        ?>
                            <li><a href="signup.php">Kayıt Ol</a></li>
                            <li><a href="login.php">Giriş Yap</a></li>
                        <?php
                        }
                        ?>
                </ul>
            </nav>
        </header>

        <div class="logo">
            <h1>MOTİVE8NOW</h1>
            <p>Hayallerinizi Gerçekleştirmeniz için Motive Ediyoruz!</p>
        </div>
        <div class="container">
            <h1 style="text-align: center;">ANASAYFA</h1>
            <p>
                <center>Sitemize hoş geldiniz.Giriş yaparak hayallerinize bir adım daha yaklaşabilirsiniz.sadece bir tıklama uzaklıkta !</center>
            </p>
            <h1 style="text-align: center;">HAKKIMIZDA</h1>
            <div align="center">
                <img src="https://i.pinimg.com/originals/fc/3e/e5/fc3ee5356310d7080f2a333ad9b2f46f.jpg" width="250" height="280">
                <div>
            <p>
                <center>Motiv8Now , kullanıcılarına yorucu hayat temposu sırasında kendilerini tekrar bulmalarını ve ...</center>
            </p>
            <h1 style="text-align: center;">MOTİVASYONEL ALINTILAR</h1>
            <i><center>Yüsüztü yere serilseniz bile , hala ileriye doğru hareket ediyorsunuzdur."</center>
            </i>
            <i>
                <center>-VİCTOR KIAM</center>
            </i>
            <h1 style="text-align: center;">GALERİ</h1>
            <div align="center">
            <img src="https://i.pinimg.com/originals/0f/54/4b/0f544b9426734b9c0297659b6fb1434b.jpg" width="400" height="300">
            <div>
            <h1 style="text-align: center;">İLETİŞİM</h1>

            <p><center>Uzmanlarımızdan Randevu Almak İçin Bizimle İletişime Geçin.</center>
        </p>

    </body>
</html>
