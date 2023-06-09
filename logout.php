<?php

include "config.php";
if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){

session_destroy();
header("Location: index.php");
        exit();
?>

<html>
    <body>
    <p>Çıkış yaptınız!</p>
    <br>
    <a href='index.php'>Anasayfa</a>
    |
    <a href="login.php" >Giriş Yap</a>
    </body>
</html>

<?php
    }
    else
    {
?>

<html>
    <body>
    <p>Lütfen Giriş Yapınız!</p>
    <br>
    <a href='index.php'>Anasayfa</a>
    |
    <a href="login.php" >Giriş Yap</a>
    </body>
</html>

<?php
    }
?>