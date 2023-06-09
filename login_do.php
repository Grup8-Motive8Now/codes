<?php
    include "config.php";

    $uname = $_POST["uname"];
    $upass = $_POST["upass"];

    $result = $mysqli -> query("SELECT * FROM users WHERE username='$uname' AND password='$upass' LIMIT 1");

    $satir_sayisi = $result->num_rows;

    if($satir_sayisi == 0)
    {
    ?>
         <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Motive8Now</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Montserrat:400,600" rel="stylesheet">
        <title> Giriş Sayfası</title>
        <style>
        

            body {
                background: linear-gradient(to right, #FFE1C2, #FFB1F1);
                background-color: #eeaace; /* Geçişin en solunda kalan rengi */
                
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

            .login-container {
                width: 30%;
                margin: auto;
                margin-top: 30px;
                background-color: #F6B5D8;
                border: 0px solid #8fa9bb2c;
                border-radius: 20px;
                padding: 20px;
            /* background-image: url('https://i.pinimg.com/564x/79/ba/4b/79ba4b74eb8fa56cfc9a3c3f2387ae47.jpg');*/
                background-size: cover;
            }

            .login-container h2 {
                text-align: center;
                margin-bottom: 20px;
                color: #474747;
            }

            .login-container p {
                color: #474747;
            }

            .form-group {
                margin-bottom: 10px;
            }

            .form-group label {
                display: block;
                font-weight: bold;
                font-style: bold;
                margin-bottom: 5px;
                color: #474747;
            }

            .form-group input {
                width: 94.5%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }

            .form-group input:focus {
                outline: none;
                border-color: #a9acad;
                box-shadow: 0 0 5px #a9acad;

            }

            .btn {
                display: block;
                width: 100%;
                padding: 10px;
                background-color: #555758;
                color: #fff;
                border: none;
                border-radius: 3px;
                cursor: pointer;
                font-size: small;
            }

            .btn:hover {
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

        <div class="login-container">
            <h2>KULLANICI GİRİŞİ</h2>
            <form action="login_do.php" method="POST">
                <div class="form-group">
                    <label for="username">Kullanıcı Adı:</label>
                    <input type="text" id="username" name="uname" required>
                </div>
                <div class="form-group">
                    <label for="password">Şifre:</label>
                    <input type="password" id="password" name="upass" required>
                </div>
                <button type="submit" class="btn">Giriş Yap</button>
            </form>
            <p align="center">Hesap Bulunamadı</p>
        </div>

    </body>
</html>

    <?php
        die();
    }

    $satir = $result->fetch_assoc();

    $_SESSION["id"] = $satir["id"];
    $_SESSION["username"] = $satir["username"];

    
    header("Location: index.php");
    exit();
   

?>