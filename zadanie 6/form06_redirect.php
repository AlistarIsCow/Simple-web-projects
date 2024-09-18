<?php session_start(); ?>
<?php
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
if (
    isset($_POST['id_prac']) &&
    is_numeric($_POST['id_prac']) &&
    is_string($_POST['nazwisko'])
) {
    $sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
    try {
        $result = $stmt->execute();
        $stmt->close();
        $_SESSION["isSuccess"] = true;
        header('Location: form06_get.php');
    } catch (Exception $e) {
        $stmt->close();
        $_SESSION["isSuccess"] = false;
        header('Location: form06_post.php');
    }
}
