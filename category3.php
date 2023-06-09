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
        <h1 style="text-align: center;">KİŞİSEL GELİŞİM</h1>
        <ul style="list-style-type: none; text-align: center; font-style: italic;">
        <li>
            <blockquote>
              "Kalıtsal olarak devraldığımız veya doğrudan deneyimlediğimiz travmalar yalnızca sıkıntı mirasını oluşturmaz, aynı zamanda gelecek nesillerle paylaşılabilecek güç ve dayanıklılık mirası yaratır"
              <footer>- Mark Wolynn</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
                Acı çok büyük olduğunda, insanlar ondan kaçmaya çabalar ancak duygularımızı engellediğimiz zaman, bizi kendiliğinden serbest bırakmaya götürebilecek gerekli iyileşme sürecine bilmeden engel oluruz"
              <footer>- 
                Mark Wolynn</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "İyi olduğunuz konuda kendinizi geliştirin ve her konuda iyi olmaya çalışmayın."
              <footer>-  
                Maye Musk</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "Kim olduğumu bildiğim için mutluyum. Öte yandan değişmek çok zor! Bu yüzden başkalarının ne dediğinden bana ne?"
              <footer>- 
                Arnold A. Lazarus</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "Kendinizin en iyi versiyonuna dönüşmek için inançlarınızı sürekli elden geçirmeli ve kimliğinizi bir üst seviyeye taşıyıp genişletmelisiniz.."
              <footer>- James Clear</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
                "Beklenti halinde olmak, yeniyi ve teklif edileni kabul etmeyi zorlaştırır." 
              <footer>- Meltem Reyhan</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
                "Davranışlarınız genellikle Kimliğinizin bir yansımasıdır."
              <footer> -  
                James Clear</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
                "Sırtınızda tonla görünmez yük taşıyorsanız bir mağazaya girmek bile bir güç gösterisidir.."
              <footer> -  
                Matt Haig</footer>
            </blockquote>
          </li>
        </ul>
    </div>
</body>

</html>
