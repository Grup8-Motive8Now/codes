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
    <title> Kategori_5</title>
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
            max-width: 800px;
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

        .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }
      .gallery-item {
        width: 30%;
        margin-bottom: 20px;
      }
      .gallery-item img {
        width: 100%;
        height: auto;
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
        <h1 style="text-align: center;">SAĞLIK VE SPOR</h1>
        <div class="gallery">
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/2b/e4/aa/2be4aa39d4a220bbab9b66549a981220.jpg" alt="Resim 1">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/91/34/e7/9134e77af2444f4d936159cfdcac0e12.jpg" alt="Resim 2">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/c4/d4/fd/c4d4fdc6c64f8f2bc1e3a33897c4649e.jpg" alt="Resim 3">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/3b/04/ae/3b04ae223f233e417dc27c2de7548760.jpg" alt="Resim 4">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/6a/8f/1e/6a8f1e906176c0d2667397c36f720891.jpg" alt="Resim 5">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/dd/04/84/dd0484d00b5c3874732c9b2d1ce76eac.jpg" alt="Resim 6">
            </div>
            <div class="gallery-item">
                <img src="https://i.pinimg.com/564x/0d/03/16/0d0316fbf034e6fcdb0e93e8a851cac2.jpg" alt="Resim 7">
              </div>
              <div class="gallery-item">
                <img src="https://i.pinimg.com/564x/55/89/56/558956261648edf48d82da51d519fe32.jpg" alt="Resim 8">
              </div>
              <div class="gallery-item">
                <img src="https://i.pinimg.com/564x/a1/7a/2e/a17a2e4a364e678f4b48749c4d2de441.jpg" alt="Resim 9">
              </div>
          </div>

    </div>
</body>

</html>