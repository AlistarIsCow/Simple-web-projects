<?php session_start(); ?>
<html>
<a href="form06_post.php">Dodaj nowego pracownika</a><br>

</html>
<?php
if (isset($_SESSION["isSuccess"])) {
    if ($_SESSION["isSuccess"] == true) {
        echo '<script language="javascript">';
        echo 'alert("Udało się dodać nowego pracownika!")';
        echo '</script>';
        $_SESSION["isSuccess"] = null;
    }
}
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$sql = "SELECT * FROM pracownicy";
$result = $link->query($sql);
foreach ($result as $v) {
    echo $v["ID_PRAC"] . " " . $v["NAZWISKO"] . "<br/>";
}
$result->free();
$link->close();
