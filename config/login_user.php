<?php
require_once "connection_database.php";
session_start();

$username = $_POST["username"];
$password = $_POST["password"];



try {
    $result = $database_connection->prepare("SELECT * FROM `member` WHERE `Username` = ? ;");
    $result->execute([$username]);

    $count = $result->rowCount();

    if ($count == 1) {
        $data = $result->fetch();
        if (sha1($password) == $data["Password"]) {
          $_SESSION["userid"]= $data["Id"];
          $_SESSION["username"]= $data["Username"];
            header("Location: ../menuutama.php");
            return;
        } else {
            echo "<script type='text/javascript'>
            alert('Password yang anda masukan tidak benar');
            window.location.replace('../halamanlogin.php');
        </script>";
        }
    } else {
        echo "<script type='text/javascript'>
        alert('Username tidak terdaftar');
        window.location.replace('../halamanlogin.php');
        </script>";
    }
} catch (PDOException $e) {
    $message =  $e->getMessage();
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.replace('../halamanlogin.php');
    </script>";
}
