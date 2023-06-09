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
        <h1 style="text-align: center;">İŞ VE KARİYER</h1>
        <ul style="list-style-type: none; text-align: center; font-style: italic;">
        <li>
            <blockquote>
              "İşleri yaratanın da yüklenenin de kendimiz olduğunu gayet iyi anlayıp onlarla uğraşmaktan ve onlar tarafından alıkonmaktan kurtulacağımız bir gün elbet gelecek. Çalışmak: birikim yapmak, hiçbir kariyer fırsatını kaçırmamak için hep pusuda beklemek, bir mevkiye göz dikmek, iş yetiştirmek, rakipleri düşünüp endişelenmek. Bunu yap, şunu görmeye git, öbürünü davet et: sosyal ilişkilerdeki baskılar, kültürel modalar, iş yoğunluğu... Her zaman bir şeyler yapmak, peki ya "olmak"? bunu sormayı bırakırız çünkü hep daha iyisi, daha acili, daha öncelikli olanı vardır. Var olmak yarına kadar bekleyebilir."
              <footer>- Frédéric Gros</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "Sanki, kendi kendimi seyreden, kendi için oynayan sessiz bir aktördüm. Bir tragedya aktörüydüm. Şimdi son perdeyi oynayacağım sırada birdenbire rolümü değiştirip bir başka adam mı olayım?
              Yok; Hamlet gibi başladım, Hamlet gibi bitireceğim. Benim için, bu, bir "kariyer" meselesidir.Birdenbire, yüzümün kara sarı boyasını silip, dayak tiryakisi bi topal uşak, bir kambur aşık, bir korkak ihtiyar makyajı yapamam."
              <footer>- 
                Yakup Kadri Karaosmanoğlu</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "Parasal başarıya ulaşmış insanlar, “her ikisi de” diye düşünürler.
              Parasal sıkıntı yaşayanlar, “ya o, ya bu” diye düşünürler.
              -Başarılı bir kariyer mi yoksa ailenize ayıracak vakit mi istersiniz? İkisini de!
              -İşinize yoğunlaşmak mı yoksa eğlenceli bir yaşam mı istersiniz? İkisini de!
              -Hayatınızda para mı yoksa anlam mı olsun? İkisi de!
              -Servet kazanmak mı yoksa en çok sevdiğiniz işi yapmak mı? İkisi de!
              Yoksul ya da parasal sıkıntı yaşayan insanlar daima birini seçerler, parasal başarıya ulaşmış insanlar ise her ikisini.. "
              <footer>-  
                T. Harv Eker</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "Bedel ödenmeden bir kariyer inşa edilmiyordu"
              <footer>- Laetitia Colombani</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
              "Bir adam piyanoda yetenekli diye müziği kariyer olarak seçmek zorunda değildir,” dedim. "Bir kız sırf buz pateninde yetenekli olduğu için bir olimpiyatçının hayatını yaşamak zorunda değildir."
              <footer>- David Walton</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
                "Şampiyonlar, başarana kadar oynamaya devam edenlerdir." 
              <footer>- Billie Jean King</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
                "Bir amaç olmaksızın, sırf yaşamak için yaşamaya ne gerek var!"
              <footer> - Lev Tolstoy</footer>
            </blockquote>
          </li>
          <li>
            <blockquote>
                "Hayatta yol almak için bir ayağınızı diğerinin önüne koymanız ve devam etmeniz yeterlidir. Körükleri takın ve sağa doğru itin."
              <footer> -  George Lucas</footer>
            </blockquote>
          </li>
        </ul>
    </div>
</body>

</html>
