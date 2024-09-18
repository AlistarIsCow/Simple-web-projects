<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <?php
    require "funkcje.php";
    if (isset($_POST["login"]) and $_POST["haslo"]) {
        $login = $_POST["login"];
        $haslo = $_POST["haslo"];
        if ($login == $osoba1->login and $haslo == $osoba1->haslo) {
            $_SESSION["zalogowanyImie"] = $osoba1->imieNazwisko;
            $_SESSION["zalogowany"] = 1;
            header("Location: user.php");
        } else if ($login == $osoba2->login and $haslo == $osoba2->haslo) {
            $_SESSION["zalogowanyImie"] = $osoba2->imieNazwisko;
            $_SESSION["zalogowany"] = 1;
            header("Location: user.php");
        }
        else{
            header("Location: index.php");
        }
    }
    ?>
</body>

</html>