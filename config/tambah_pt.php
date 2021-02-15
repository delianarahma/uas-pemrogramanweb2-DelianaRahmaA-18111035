<?php
session_start();
require_once "connection_database.php";

$img = $_POST["image"];
$nama_perusahaan = $_POST["nama_perusahaan"];
$alamat = $_POST["alamat"];
$kode_pos = $_POST["kode_pos"];
$jam_buka = $_POST["jam_buka"];
$provinsi = $_POST["provinsi"];
$telepon = $_POST["telepon"];
$divisi = $_POST["divisi"];
$need_person = $_POST["need_person"];


    $q = $database_connection->prepare("INSERT INTO `detail_informasi` (`id`,`image`,`nama_perusahaan`,`alamat`,
    `kode_pos`,`jam_buka`,`provinsi`, `telepon`, `divisi`, `need_person`) VALUES (NULL, ?,?,?,?,?,?,?,?,?);");
    $result = $q->execute( [$img,$nama_perusahaan,$alamat,$kode_pos,$jam_buka,$provinsi,$telepon,$divisi,$need_person]);

    header("Location: ../menuutama.php");