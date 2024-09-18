<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />

</head>

<body>
    <?php
    if (isset($_POST["wyloguj"])) {
        $_SESSION["zalogowany"] = 0;
    }
    ?>
    <a href="user.php">user.php</a>
    <h1>Nasz system</h1>
    <form action="logowanie.php" method="post">
        <fieldset>
            <legend>Logowanie</legend>
            Login: <input type="text" name="login"><br>
            Haslo: <input type="password" name="haslo"><br>
            <input value="Zaloguj" type="submit" name="zaloguj">
        </fieldset>
    </form>
    <br>
    <form action="cookie.php" method="get">
        <fieldset>
            <legend>Cookies</legend>
        czas: <input type="number" name="cookie"><br>
        <input value="UtworzCookie" type="submit" name="utworzCookie">
    </form>
    <?php
    if (isset($_COOKIE["nazwa"])) {
        echo "<br>";
        echo "Nazwa: " . "nazwa";
        echo "<br>";
        echo "Wartosc: " . $_COOKIE["nazwa"];
    }
    ?>
    </fieldset>
</body>

</html>