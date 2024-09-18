<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <a href="index.php">index.php<br></a>
    <?php
    require_once("funkcje.php");
    if (isset($_GET["cookie"])){
        $czas = $_GET["cookie"];
        setcookie("nazwa", "wartosc", time() +  $czas, "/");
        echo "Cookie wygasa po: ".$czas." sekundach!";
    }
    else{
        echo "Cookie nie istnieje!";
    }
    ?>
</body>

</html>