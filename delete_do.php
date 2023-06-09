<?php
    include "config.php";
    if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){

    $result = $mysqli -> query("DELETE FROM users WHERE id=".$_SESSION['id']);

    if ($result == false)
    {
        echo("Error description: " . $mysqli -> error);
    }
    else
    {

        session_destroy();

        ?>
        <html>
            <body>
                <p>Hesap Silindi!</p>
                <br>
                <a href="index.php" >Ana Sayfa</a>
                |
                <a href="login.php" >Giriş Yap</a>
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
                <br>
                <a href="index.php" >Ana Sayfa</a>
                |
                <a href="login.php" >Giriş Yap</a>
            </body>
        </html>
        <?php
    }
    ?>