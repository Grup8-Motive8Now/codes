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
        <h1 style="text-align: center;">KARIŞIK RESİMLER</h1>
        <div class="gallery">
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/8c/d1/5f/8cd15feca7ab17594b7222f01ce81a76.jpg" alt="Resim 1">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/0f/e3/1d/0fe31d5c5381b059b03ba3a0359332a5.jpg" alt="Resim 2">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/38/70/40/3870406f74ed8db2019d693d6327f5d9.jpg" alt="Resim 3">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/1a/2b/dd/1a2bddc4cd33ba4d0f445c943814a29f.jpg" alt="Resim 4">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/06/5c/39/065c39b165ae1880e45f4192848b48ca.jpg" alt="Resim 5">
            </div>
            <div class="gallery-item">
              <img src="https://i.pinimg.com/564x/7e/bd/7a/7ebd7a4bd89b4a909e5870e81d3a0c74.jpg" alt="Resim 6">
            </div>
            <div class="gallery-item">
                <img src="https://i.pinimg.com/564x/71/63/93/71639361013529de415326c428fa4a84.jpg" alt="Resim 7">
              </div>
              <div class="gallery-item">
                <img src="https://i.pinimg.com/564x/8a/d3/30/8ad330188c15c13d9b6206982af04baf.jpg" alt="Resim 8">
              </div>
              <div class="gallery-item">
                <img src="https://i.pinimg.com/564x/c1/f0/e4/c1f0e45972e58ee59fd98e119d74d3e9.jpg" alt="Resim 9">
              </div>
          </div>

    </div>
</body>

</html>