<?php
require_once "connection_database.php";

$nama = $_POST["nama"];
$npm = $_POST["npm"];
$kelas = $_POST["kelas"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];


    $q = $database_connection->prepare("INSERT INTO `member` (`Id`,`Nama`, `Npm`, `Kelas`, `Email`, `Username`, `Password`) VALUES (NULL, ?,?,?,?,?,SHA1(?));");
    $result = $q->execute([$nama, $npm, $kelas, $email, $username, $password]);
    if ($result) {
        header("Location: ../berhasildaftar.php");
        return;
    } else {
        echo "<script type='text/javascript'>
        alert('Email telah di gunakan');
        window.location.replace('../halamandaftar.php');
        </script>";
    }

