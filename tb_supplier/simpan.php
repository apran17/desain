<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama                   = $_POST['nama'];
$no_telp                = $_POST['no_telp'];
$alamat                 = $_POST['alamat'];
$no_rekening            = $_POST['no_rekening'];

//query insert data ke dalam database
$query = "INSERT INTO tb_supplier (nama, no_telp, alamat, no_rekening)
VALUES ('$nama', '$no_telp', '$alamat', '$no_rekening')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
