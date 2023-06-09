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
    <title> Galeri Sayfası</title>
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

        /*Kategori kutuları */
        .category-groups {
            display: flex;
            flex-wrap: wrap;
        }

        .category-group {
            flex: 1;
            margin-right: 20px;
        }

        .category-13 {
            margin: auto;
        }

       /* .category-boxes {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 50px;
        }*/

        .category-box {
            width: 200px;
            height: 175px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            
        }

        .category-box:hover {
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .category-box h2 {
            margin: 0;
            /*font-size: 24px;*/
            font-weight: 600;
            color: #333;
            text-align: center;
            padding: 10px;
        }

       

        .category-box a {
            display: block;
            margin-top: 10px;
            font-size: 16px;
            text-align: center;
            color: #1b1b1b;
           /* background-color: #e2b1c7;*/
            padding: 8px 20px;
            border-radius: 25px;
            text-decoration: none;
        }

        .category-box a:hover {
            background-color: #f5f0f4b6;
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
        <h1 style="text-align: center; color: #474747;">GALERİ</h1>
    </div>
    <container>
        <div class="category-groups">
            <div class="category-group">
                <div class="category-box" style="background-color: #FFE3E3;">
                    <h2><a href="category_1.php">BAŞARI VE HEDEFLER</a></h2>
                </div>
                <div class="category-box" style="background-color: #FFE3E3;">
                    <h2><a href="category_2.php">İŞ VE KARİYER</a></h2>  
                </div>
                <div class="category-box" style="background-color: #FFE3E3;">
                    <h2><a href="category_3.php">KİŞİSEL GELİŞİM</a></h2>
                </div>
            </div>

            <div class="category-group">
                <div class="category-box" style="background-color: #FFCDCD;">
                    <h2><a href="category_4.php">AİLE VE EVLİLİK</a></h2>
                </div>
                <div class="category-box" style="background-color: #FFCDCD;">
                   <h2><a href="category_5.php">İLİŞKİLER VE AŞK</a></h2>  
                </div>
                <div class="category-box" style="background-color: #FFCDCD;">
                    <h2><a href="category_6.php">ARKADAŞLIK VE DOSTLUK</a></h2>
                    
                </div>
            </div>

            <div class="category-group">
                <div class="category-box" style="background-color: #B396BD;">
                    <h2><a href="category_7.php">SAĞLIK VE SPOR</a></h2>
                   
                </div>
                <div class="category-box" style="background-color: #B396BD;">
                   <h2><a href="category_8.php">MOTİVASYON VE DİSİPLİN</a></h2>
                </div>
                <div class="category-box" style="background-color: #B396BD;">
                    <h2><a href="category_9.php">OLUMLU DÜŞÜNCE VE ZİHİN SAĞLIĞI</a></h2>
                  
                </div>
            </div>

            <div class="category-group">
                <div class="category-box" style="background-color: #ABB5BF;">
                    <h2><a href="category_10.php">SANAT VE YARATICILIK</a></h2>
                </div>
                <div class="category-box" style="background-color: #ABB5BF;">
                   <h2><a href="category_11.php">DOĞA VE ÇEVRE</a></h2> 
                    
                </div>
                <div class="category-box" style="background-color: #ABB5BF;">
                    <h2><a href="category_12.php">SEYAHAT VE KEŞİF</a></h2>
                    
                </div>
            </div>

            <div class="category-13">
                <div class="category-box" style="background-color: #b4a0cf;">
                   <h2><a href="category_13.php">KARIŞIK RESİMLER</a></h2> 
                  
                </div>
            </div>
        </div>

    </container>

</body>

</html>