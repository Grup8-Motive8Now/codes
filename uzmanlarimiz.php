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
    <title> Uzmanlar Sayfası</title>
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
        <h1 style="text-align: center;">UZMANLARIMIZ</h1>
        <div class="card">
            <img src="https://media.istockphoto.com/id/1399395748/tr/foto%C4%9Fraf/cheerful-business-woman-with-glasses-posing-with-her-hands-under-her-face-showing-her.jpg?s=612x612&w=0&k=20&c=XxGvEWqKVfZg0v_n0FPqDEOUfd5ZBiToFoCwpG5uEgQ=" alt="Uzman Resmi">
            <h2>Aylin ÖZTÜRK</h2>
            <p>Sağlık Koçu</p>
            <button onclick="location.href='randevu.php'">Randevu Al</button>
        </div>
        <div class="card">
            <img src="https://media.istockphoto.com/id/1179420343/tr/foto%C4%9Fraf/%C5%9Fehirde-g%C3%BClen-adam.jpg?s=612x612&w=0&k=20&c=KIG6SVD4ZFIzYHc9YCkfT2ic_Ldr895b1nMhb8g4-LY=" alt="Uzman Resmi">
            <h2>Can KORKMAZ</h2>
            <p>Psikolog</p>
            <button onclick="location.href='randevu.php'">Randevu Al</button>
        </div>
        <div class="card">
            <img src="https://media.istockphoto.com/id/1045886560/tr/foto%C4%9Fraf/%C3%A7apraz-kollar%C4%B1-%C3%BCzerinde-gri-arka-plan-izole-olan-yak%C4%B1%C5%9F%C4%B1kl%C4%B1-mavi-t-shirt-ayakta-g%C3%BCl%C3%BCmseyen.jpg?s=612x612&w=0&k=20&c=l-dzOdzGdItUKX35vhKfsX0jxqbNtPvnXu9smDZTXnE=" alt="Uzman Resmi">
            <h2>Mehmet AKIN</h2>
            <p>Beslenme ve Psikoloji Uzmanı</p>
            <button onclick="location.href='randevu.php'">Randevu Al</button>
        </div>
        <div class="card">
            <img src="https://media.istockphoto.com/id/1008909370/tr/foto%C4%9Fraf/i%C5%9F-kad%C4%B1n%C4%B1.jpg?s=612x612&w=0&k=20&c=extC-VZsUeD4i_TMOAgkymmZF0MC6bt8dOVa9F1B8M0=" alt="Uzman Resmi">
            <h2>Zeynep DEMİR</h2>
            <p>Sağlık Koçu</p>
            <button onclick="location.href='randevu.php'">Randevu Al</button>
        </div>
    </div>
</body>

</html>