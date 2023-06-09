<?php
    include "config.php";
    if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){

    $username = $_POST["upname"];
    $password = $_POST["uppass"];
    $telno = $_POST["uptel"];
    $bdate = $_POST["upbdate"];
    $ad = $_POST["pad"];
    $soyad = $_POST["psoyad"];



    $result = $mysqli -> query("UPDATE users SET username='".$username."', password='".$password."', telnumber='".$telno."', birthdate='".$bdate."', name='".$ad."', surname='".$soyad."' WHERE id=".$theuser["id"]);

    if (!$result)
    {
        echo "Hata meydana geldi!";
        echo $mysqli -> error;
    }
    else
    {
        ?>
        <html>
            <body>
                <p>Profil Düzenleme Başarılı!</p>
                <a href="index.php" >Ana Sayfa</a>
            </body>
        </html>
        <?php
    }
    ?>


<?php
    }
    else
    {
        ?>
        <html>
            <body>
                <p>Lütfen Giriş Yapınız!</p>
                <a href="index.php" >Ana Sayfa</a>
                <a href="login.php" >Giriş Yap</a>
            </body>
        </html>
        <?php
    }
    ?>