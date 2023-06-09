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
        <h1 style="text-align: center;">ARKADAŞLIK VE DOSTLUK</h1>
        <div class="gallery">
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/fc/d4/9d/fcd49d88b704341b68a8097f063e6c09.jpg" alt="Resim 1">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/c8/a5/be/c8a5be5dfacffb2efb02359d74fa4bf7.jpg" alt="Resim 2">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/2c/e4/58/2ce458461c01c94f948fe56598db72ea.jpg" alt="Resim 3">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/ba/3c/7e/ba3c7e36f23a280ea1f44ee06d7d6b5d.jpg" alt="Resim 4">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/49/42/8c/49428c08ed847938fd2c1eb61faa4612.jpg" alt="Resim 5">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/2c/54/33/2c54338a53299ab554cb14911c15674d.jpg" alt="Resim 6">
            </div>
            <div class="gallery-item">
                <img src="https://i.pinimg.com/564x/55/bd/99/55bd99155b04dbec9cec294f1374fc02.jpg" alt="Resim 7">
              </div>
              <div class="gallery-item">
                <img src="https://i.pinimg.com/564x/f2/74/b4/f274b4ad2643cc94f70ef1ec20c8ae14.jpg" alt="Resim 8">
              </div>
              <div class="gallery-item">
                <img src="https://i.pinimg.com/564x/af/fd/d4/affdd429d98693625236a1d6c02b6983.jpg" alt="Resim 9">
              </div>
          </div>

    </div>
</body>

</html>