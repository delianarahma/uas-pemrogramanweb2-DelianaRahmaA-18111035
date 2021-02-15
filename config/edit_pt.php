<?php
require_once "connection_database.php";

$id = $_POST["id"];
$img = $_POST["image"];
$nama_perusahaan = $_POST["nama_perusahaan"];
$alamat = $_POST["alamat"];
$kode_pos = $_POST["kode_pos"];
$jam_buka = $_POST["jam_buka"];
$provinsi = $_POST["provinsi"];
$telepon = $_POST["telepon"];
$divisi = $_POST["divisi"];
$need_person = $_POST["need_person"];


    $q = $database_connection->prepare("UPDATE `detail_informasi` SET `image` = ?,
    `nama_perusahaan`=?, `alamat`=?, `kode_pos`=?, `jam_buka`=?, `provinsi`=?,
    `telepon`=?, `divisi`=?, `need_person`=? WHERE id = ?");
    $result = $q->execute( [$img, $nama_perusahaan, $alamat, $kode_pos, $jam_buka, 
    $provinsi, $telepon, $divisi, $need_person, $id]);

    header("Location: ../menuutama.php");