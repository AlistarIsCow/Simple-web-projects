<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <?php
    if (isset($_POST['myfile'])) {
        $currentDir = getcwd();
        $uploadDirectory = "/";
        $fileName = $_FILES['myfile']['name'];
        $fileSize = $_FILES['myfile']['size'];
        $fileTmpName = $_FILES['myfile']['tmp_name'];
        $fileType = $_FILES['myfile']['type'];
        if (
            $fileName != "" and
            $fileType == "image/png" or $fileType == "image/jpeg"
            or $fileType == "image/PNG" or $fileType == "image/JPEG"
        ) {
            $uploadPath = $currentDir . $uploadDirectory . $fileName;
            move_uploaded_file($fileTmpName, $uploadPath);
        }
    }

    ?>
    <a href="index.php">index.php<br></a>
    <form action="index.php" method="post">
        <input value="wyloguj" type="submit" name="wyloguj">
    </form>
    <?php require 'funkcje.php';
    if ($_SESSION["zalogowany"] == 0) {
        header("Location: index.php");
    }
    echo "<br>";
    echo "Zalogowany: ".$_SESSION["zalogowanyImie"]."<br>";
    echo "<br>";
    ?>
    <form action='user.php' method='POST' enctype='multipart/form-data'>
        <input type="file" name="myfile" id="fileToUpload">
        <input value="wyslij" type="submit" name="myfile">
    </form>
    <img src="pepemonkas1.jpg" alt="MonkaS">
</body>

</html>