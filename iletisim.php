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
    <title> Kayıt Sayfası</title>
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

        .form-container {
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

        }

        .support-container{
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
            text-align: center;
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
        form {
			background-color: #F6B1DD;
			padding: 20px;
			margin: 0 auto;
            margin-top: 30px;
			width: 400px;
			border-radius: 20px;
			/*box-shadow: 0px 0px 10px #ccc;*/
			box-sizing: border-box;
            color: #474747
		}

        

		label {
			display: block;
			font-weight: bold;
			margin-bottom: 5px;
            
		}

		input[type="text"], input[type="email"], input[type="tel"]{
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
        
        input[type="text"],input[type="email"], input[type="tel"] {
            outline: none;
            border-color: #a9acad;
            box-shadow: 0 0 5px #a9acad;

        }

		input[type="submit"] {
			background-color: #555758;
			color: #fff;
			border: none;
			border-radius: 4px;
			padding: 10px;
			cursor: pointer;
			font-size: 18px;
			width: 100%;
		}

        input[type="submit"]:hover{
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
            <div class="form-container">
                <h1 style="text-align: center;">İLETİŞİM</h1>
                <h4 style="text-align: center;">UZMANLARIMIZDAN RANDEVU ALMAK İÇİN BİZİMLE İLETİŞİME GEÇİN.</h4>
              <form action="#" method="POST">
                <label for="name">İsim Soyisim:</label>
                <input type="text" id="name" name="name" required>
        
                <label for="surname">E-posta:</label>
                <input type="email" id="surname" name="surname" required>
        
                <label for="email">Telefon Numarası:</label>
                <input type="tel" id="email" name="email" required>

                <input type="submit" value="Gönder">
              </form>
            </div>
            <div class="support-container">
              <h2>Teknik Destek ve Sorularınız İçin</h2>
              <p>E-posta:&nbsp;<a href=mailto:<teknikdestek>teknikdestek@orneksite.com</p>
            </div>
          
</body>

</html>