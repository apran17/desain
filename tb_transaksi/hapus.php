<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tb_metode_pembayaran WHERE id_metode_pembayaran = '$id'";

if ($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
