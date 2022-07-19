<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama                   = $_POST['nama'];
$no_telp                = $_POST['no_telp'];
$alamat                 = $_POST['alamat'];
$jenis_kelamin                    = $_POST['jenis_kelamin'];

//query insert data ke dalam database
$query = "INSERT INTO tb_member (nama, no_telp, alamat, jenis_kelamin)
VALUES ('$nama', '$no_telp', '$alamat', '$gen')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
