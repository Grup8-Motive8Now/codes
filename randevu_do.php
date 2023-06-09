<?php
    include "config.php";
    if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){

    $rtercih = $_POST["rtercih"];
    $rdate = $_POST["rdate"];
    $rtime = $_POST["rtime"];

    $result = $mysqli -> query("INSERT INTO randevu (id,doctor,date,time) VALUES ('".$theuser["id"]."', '".$rtercih."', '".$rdate."', '".$rtime."')");

    if ($result == false)
    {
        echo("Error description: " . $mysqli -> error);
    }
    else
    {
        header("Location: randevu_duzen.php");
        exit();
        ?>
        
        <html>
            <body>
                <p>Randevu Alındı!</p>
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