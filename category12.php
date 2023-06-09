<!DOCTYPE html>
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
    <title> Kategori2 </title>
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
        <h1 style="text-align: center;">SEYAHAT VE KEŞİF</h1>
        <ul style="list-style-type: none; text-align: center; font-style: italic;">
        <li>
            <blockquote>
              "Seyahat için yaptığın yatırım kendin için yaptığın en iyi yatırımdır."
              <footer>- Matthew Karsten</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "Uzaklara gittikten sonra tamamen değişmiş biri olarak dönmek gerçek bir mucize."
              <footer>- 
                Kate Douglas Wiggin</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "Gezgin bir yere varmak için değil, keşfetmek için seyahat eder "
              <footer>- Goethe</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "Hayat bir kitaptır ve gezip görmeyenler hep aynı sayfayı okur."
              <footer>-  St. Agustine</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "Senede bir defa daha önce hiç görmediğin bir yere git."
              <footer>- Dalai Lama</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
                Her şey kötüye gittiğinde kendine bir tatil ısmarla." 
              <footer>- Betty Williams</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
                "Kıyıyı gözden kaybetmeye cesaret etmedikçe insan, yeni okyanuslar keşfedemez."
              <footer> -Andre Gide</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
                ""Mutluluk gidilen yolun üzerindedir, yolun sonunda değil."
              <footer> -  Epiktetos</footer>
            </blockquote>
          </li>
        </ul>
    </div>
</body>

</html>