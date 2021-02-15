<?php
require_once "connection_database.php";

$id = $_POST["id"];

try {

    $q = $database_connection->prepare("DELETE FROM `detail_informasi` WHERE id = ?");
    $result = $q->execute([$id]);
    if ($result) {
        header("Location: ../menuutama.php");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
