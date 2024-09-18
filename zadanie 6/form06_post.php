<?php session_start(); ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
if (isset($_SESSION["isSuccess"])) {
    if ($_SESSION["isSuccess"] == false) {
        echo '<script language="javascript">';
        echo 'alert("Wystąpił błąd podczas dodawania pracownika!")';
        echo '</script>';
        $_SESSION["isSuccess"] = null;
    }
}
?>

<body>
    <a href="form06_get.php">Lista pracowników</a>
    <form action="form06_redirect.php" method="POST">
        id_prac <input type="text" name="id_prac">
        nazwisko <input type="text" name="nazwisko">
        <input type="submit" value="Wstaw">
        <input type="reset" value="Wyczysc">
    </form>