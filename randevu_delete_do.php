<?php
    include "config.php";
    if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){

    $drandevu_id = $_POST["delrid"];

    $result = $mysqli -> query("DELETE FROM randevu WHERE randevu_id=".$drandevu_id." AND id=".$_SESSION['id']);


    if ($result == false)
    {
        echo("Error description: " . $mysqli -> error);
    }
    else
    {
        ?>
        <html>
            <body>
                <p>Randevu Silindi!</p>
                <br>
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
                <br>
                <a href="index.php" >Ana Sayfa</a>
                |
                <a href="login.php" >Giriş Yap</a>
            </body>
        </html>
        <?php
    }
    ?>