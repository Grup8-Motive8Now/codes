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
        <h1 style="text-align: center;">İLİŞKİLER VE AŞK</h1>
        <ul style="list-style-type: none; text-align: center; font-style: italic;">
        <li>
            <blockquote>
              "Böylesi bir hızla aşık olunuyorsa, bunun nedeni belki aşık olma arzusunun, aşık olunan kişiden önce gelmesidir."
              <footer>- Alain de Botton</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "Geçmiş ilişkilerinizin bagajını asla gelecekteki ilişkilerinizin balayında taşımayın."
              <footer>- 
                Faraaz Kazi</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "İyi bir ilişki, birinin geçmişinizi kabul etmesi, bugününüzü desteklemesi ve geleceğinizi teşvik etmesidir"
              <footer>-  
                Zig Ziglar</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "Geçmiş çözülmezse, gelecekteki ilişkiler zarar görür. Bir başkasına kapıyı açmadan önce kalbinin iyileşmesine izin ver."
              <footer>- Leon Brown</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "Geçmişi affet. Bitti. Ondan ders al ve bırak. İnsanlar sürekli değişiyor ve büyüyor. Geçmişte bir kişinin sınırlı, bağlantısız, olumsuz imajına tutunmayın"
              <footer>- Brian L.Weiss</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
                "Yaptığın her şey yaptığın seçimlere dayanıyor. Suçlanacak olan anne babanız, geçmiş ilişkileriniz, işiniz, ekonominiz, havanız, bir tartışmanız ya da yaşınız değil. Yaptığınız her karar ve seçimden siz ve sadece siz sorumlusunuz." 
              <footer>- Wayne Dyer</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
                "Aşkın çılgınlığı, aşık olunan kişinin özündeki normalliği görmeyi reddetmesinden bellidir."
              <footer> -  Alain de Botton</footer>
            </blockquote>
          </li>
        </ul>
    </div>
</body>

</html>